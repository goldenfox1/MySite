<?php
class ControllerExtensionModuleIcImageOptimizer extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/ic_image_optimizer');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('ic_image_optimizer', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_help_jpeg'] = $this->language->get('text_help_jpeg');
		$data['text_help_clear'] = $this->language->get('text_help_clear');
		
		$data['text_clear_success'] = $this->language->get('text_clear_success');
		
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_cache_dir'] = $this->language->get('entry_cache_dir');
		$data['entry_jpeg_quality'] = $this->language->get('entry_jpeg_quality');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_clear'] = $this->language->get('button_clear');
		$data['button_cancel'] = $this->language->get('button_cancel');

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
			'href' => $this->url->link('extension/module/ic_image_optimizer', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/ic_image_optimizer', 'user_token=' . $this->session->data['user_token'], true);
		$data['clear'] = $this->url->link('extension/module/ic_image_optimizer/clear', 'user_token=' . $this->session->data['user_token'], true);
		
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		$data['default_quality'] = 75;
		$data['default_cache_dir'] = 'cache';
		
		if (isset($this->request->post['ic_image_optimizer_cache_dir'])) {
		    $data['ic_image_optimizer_cache_dir'] = $this->request->post['ic_image_optimizer_cache_dir'];
		} else {
		    $data['ic_image_optimizer_cache_dir'] = $this->config->get('ic_image_optimizer_cache_dir');
		}
		
		if (isset($this->request->post['ic_image_optimizer_quality'])) {
		    $data['ic_image_optimizer_quality'] = $this->request->post['ic_image_optimizer_quality'];
		} else {
		    $data['ic_image_optimizer_quality'] = $this->config->get('ic_image_optimizer_quality');
		}
		
		if (isset($this->request->post['ic_image_optimizer_status'])) {
			$data['ic_image_optimizer_status'] = $this->request->post['ic_image_optimizer_status'];
		} else {
			$data['ic_image_optimizer_status'] = $this->config->get('ic_image_optimizer_status');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/ic_image_optimizer', $data));
	}
	
	public function clear(){
	    if($this->config->get('ic_image_optimizer_cache_dir')){
	        $path = DIR_IMAGE . $this->config->get('ic_image_optimizer_cache_dir') . '/catalog';
	    }else{
	        $path = DIR_IMAGE . 'cache/catalog';
	    }
	    
	    $paths = array($path);
	    
	    $files = array();
	    
	    while(count($paths) != 0){
	        
	        $next = array_shift($paths);
	    
	        foreach(glob($next . '/*') as $target){
	            if(is_dir($target)){
	                $paths[] = $target;
	            }
	            
	            $files[] = $target;
	        }
	    }
	    
	    rsort($files);
	    
	    foreach ($files as $file) {
	        // If file just delete
	        if (is_file($file)) {
	            unlink($file);
	            
	            // If directory use the remove directory function
	        } elseif (is_dir($file)) {
	            rmdir($file);
	        }
	    }
	    
	    $json = array('success' => true);
	    $this->response->addHeader('Content-Type: application/json');
	    $this->response->setOutput(json_encode($json));
	}
	
	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/ic_image_optimizer')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}