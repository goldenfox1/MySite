<?php
class ControllerExtensionModuleBcimlite extends Controller {
	
	private $error = array();

	public function index() {
		
		$this->load->language('extension/module/bcimlite');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_bcimlite', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/bcimlite', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/bcimlite', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		$this->document->addScript('view/javascript/jquery/jquery-ui/jquery-ui.min.js');
		$this->document->addScript('view/javascript/elfinder/js/elfinder.min.js');
		$this->document->addScript('view/javascript/elfinder/js/extras/editors.default.js');
		$this->document->addScript('view/javascript/elfinder/js/i18n/elfinder.el.js');
		$this->document->addStyle('view/javascript/elfinder/css/theme.css');
		$data['url'] = $this->url->link('extension/module/bcimlite/connector&user_token=' . $this->session->data['user_token'] ,'#trash', true);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/bcimlite', $data));
	}
	
	public function connector() {
		
			require DIR_SYSTEM.'elfinder/php/autoload.php';

			function access($attr, $path, $data, $volume, $isDir, $relpath) {
				$basename = basename($path);
				return $basename[0] === '.'
						 && strlen($relpath) !== 1
					? !($attr == 'read' || $attr == 'write')
					:  null;
			}
			
			if ($this->request->server['HTTPS']) {
					$url = HTTPS_CATALOG . 'image/catalog';
				} else {
					$url = HTTP_CATALOG . 'image/catalog';
				}

			$opts = array(
				'roots' => array(
					array(
						'driver'        => 'LocalFileSystem',
						'path'          => DIR_IMAGE.'catalog',
						'URL'           => $url,
						'winHashFix'    => DIRECTORY_SEPARATOR !== '/',
						'uploadDeny'    => array('all'),
						'uploadAllow'   => array('image'),
						'uploadOrder'   => array('deny', 'allow' ),
						'accessControl' => 'access' ,
						'attributes' => array(
										array(// hide anything else
											'pattern' => 'cache',
											'hidden' => true
										)
									)
					),
					array(
						'id'            => '1',
						'driver'        => 'Trash',
						'path'          => DIR_IMAGE.'.trash/',
						'tmbURL'        => DIR_IMAGE.'.trash/.tmb/',
						'winHashFix'    => DIRECTORY_SEPARATOR !== '/',
						'uploadDeny'    => array('all'),
						'uploadAllow'   => array('image', 'text/plain', 'ico'),
						'uploadOrder'   => array('deny', 'allow'),
						'accessControl' => 'access',
					)
				)
			);
			
			// run elFinder
			if($this->validate()){
			$connector = new elFinderConnector(new elFinder($opts));
			$connector->run();
			}
	}

	protected function validate() {
		
		if (!$this->user->hasPermission('modify', 'extension/module/bcimlite')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
				
		return !$this->error;
	}
}