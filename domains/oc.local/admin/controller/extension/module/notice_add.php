<?php
class ControllerExtensionModuleNoticeAdd extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/notice_add');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if(isset($this->request->post['module_notice_add_timeout'])) {
				$this->request->post['module_notice_add_timeout'] = (int)$this->request->post['module_notice_add_timeout'];
			}

			$this->model_setting_setting->editSetting('module_notice_add', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

			if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');


		$data['entry_status'] = $this->language->get('entry_status');

		$data['layout_noty'] = $this->language->get('layout_noty');

			$data['layout_bottomRight'] = $this->language->get('layout_bottomRight');
			$data['layout_bottomLeft'] = $this->language->get('layout_bottomLeft');
			$data['layout_bottomCenter'] = $this->language->get('layout_bottomCenter');
			$data['layout_bottom'] = $this->language->get('layout_bottom');

			$data['layout_center'] = $this->language->get('layout_center');
			$data['layout_centerRight'] = $this->language->get('layout_centerRight');
			$data['layout_centerLeft'] = $this->language->get('layout_centerLeft');

			$data['layout_top'] = $this->language->get('layout_top');
			$data['layout_topRight'] = $this->language->get('layout_topRight');
			$data['layout_topLeft'] = $this->language->get('layout_topLeft');
			$data['layout_topCenter'] = $this->language->get('layout_topCenter');

		$data['noty_timeout'] = $this->language->get('noty_timeout');
			
		$data['button_save'] = $this->language->get('button_save');
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
			'href' => $this->url->link('extension/module/notice_add', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/notice_add', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);


		if (isset($this->request->post['module_notice_add_status'])) {
			$data['module_notice_add_status'] = $this->request->post['module_notice_add_status'];
		} else {
			$data['module_notice_add_status'] = $this->config->get('module_notice_add_status');
		}

		if (isset($this->request->post['module_notice_add_layout'])) {
			$data['module_notice_add_layout'] = $this->request->post['module_notice_add_layout'];
		} else {
			$data['module_notice_add_layout'] = $this->config->get('module_notice_add_layout');
		}

		if (isset($this->request->post['module_notice_add_timeout'])) {
			$data['module_notice_add_timeout'] = $this->request->post['module_notice_add_timeout'];
		} else {
			$data['module_notice_add_timeout'] = $this->config->get('module_notice_add_timeout');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/notice_add', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/notice_add')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}




