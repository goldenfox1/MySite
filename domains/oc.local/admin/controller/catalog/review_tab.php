<?php
class ControllerCatalogReviewtab extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('catalog/review');

		$this->load->model('catalog/review');
		
		return $this->load->view('catalog/review_tab_list', $this->getList());
	}

	public function tab() {
		$this->load->language('catalog/review');

		$this->load->model('catalog/review');

		$this->response->setOutput($this->load->view('catalog/review_tab_list', $this->getList()));
	}
	
	public function add() {
		$this->load->language('catalog/review');
		$this->load->model('catalog/review');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_review->addReview($this->request->post);
					
			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			if (isset($this->request->get['page_r'])) {
				$url .= '&page_r=' . $this->request->get['page_r'];
			}
			$data['cancel'] = "ClickClose('" . $url . "');"; 
			$data['success'] = $this->language->get('text_success');
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->setOutput($this->load->view('catalog/review_tab_form', $data));
		} else {
			$this->response->setOutput($this->load->view('catalog/review_tab_form', $this->getForm()));
		}
	}

	public function edit() {
		$this->load->language('catalog/review');
		$this->load->model('catalog/review');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_review->editReview($this->request->get['review_id'], $this->request->post);
			
			$url = '';
			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}
			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}
			if (isset($this->request->get['page_r'])) {
				$url .= '&page_r=' . $this->request->get['page_r'];
			}
			$data['cancel'] = "ClickClose('" . $url . "');"; 
			$data['success'] = $this->language->get('text_success');
			$this->session->data['success'] = $this->language->get('text_success');
			$this->response->setOutput($this->load->view('catalog/review_tab_form', $data));
		} else {
			$this->response->setOutput($this->load->view('catalog/review_tab_form', $this->getForm()));
		}
	}

	public function delete() {
		$this->load->language('catalog/review');
		$this->load->model('catalog/review');

		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			foreach ($this->request->post['selected'] as $review_id) {
				$this->model_catalog_review->deleteReview($review_id);
			}
			$this->session->data['success'] = $this->language->get('text_success');
		}
		$this->response->setOutput($this->load->view('catalog/review_tab_list', $this->getList()));
	}
	
	public function copy() {
		$this->load->language('catalog/review');
		$this->load->model('catalog/review');

		if (isset($this->request->post['selected']) && $this->validateCopy()) {
			foreach ($this->request->post['selected'] as $review_id) {
				$this->model_catalog_review->copyReview($review_id);
			}
			$this->session->data['success'] = $this->language->get('text_success');
		}

		$this->response->setOutput($this->load->view('catalog/review_tab_list', $this->getList()));
	}
	
	protected function getList() {
		if (isset($this->request->get['product_id'])) {
			$product_id = $this->request->get['product_id'];
		} else {
			$product_id = '';
		}

		if (isset($this->request->get['filter_author'])) {
			$filter_author = $this->request->get['filter_author'];
		} else {
			$filter_author = '';
		}

		if (isset($this->request->get['filter_status'])) {
			$filter_status = $this->request->get['filter_status'];
		} else {
			$filter_status = '';
		}

		if (isset($this->request->get['filter_date_added'])) {
			$filter_date_added = $this->request->get['filter_date_added'];
		} else {
			$filter_date_added = '';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'DESC';
		}

		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'r.date_added';
		}

		if (isset($this->request->get['page_r'])) {
			$page_r = $this->request->get['page_r'];
		} else {
			$page_r = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page_r'])) {
			$url .= '&page_r=' . $this->request->get['page_r'];
		}
		
		$data['refresh'] = "ClickRefresh('" . $url . "');";
		$data['add'] = "ClickAdd('" . $url . "');";
		$data['copy'] = "ClickCopy('" . $url . "');";
		$data['delete'] = "ClickDelete('" . $url . "')";
		$data['filter'] = "ClickFilter('" . $url . "');";
		
		
		$data['reviews'] = array();

		$filter_data = array(
			'product_id'    	=> $product_id,
			'filter_author'     => $filter_author,
			'filter_status'     => $filter_status,
			'filter_date_added' => $filter_date_added,
			'sort'              => $sort,
			'order'             => $order,
			'start'             => ($page_r - 1) * $this->config->get('config_limit_admin'),
			'limit'             => $this->config->get('config_limit_admin')
		);

		$review_total = $this->model_catalog_review->getTotalReviews($filter_data);

		$results = $this->model_catalog_review->getReviews($filter_data);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'review_id'  => $result['review_id'],
				'name'       => $result['name'],
				'author'     => $result['author'],
				'rating'     => $result['rating'],
				'status'     => ($result['status']) ? $this->language->get('text_enabled') : $this->language->get('text_disabled'),
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
				'edit'       => "ClickEdit('" . $url . "'," . $result['review_id'] . ")"
			);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page_r'])) {
			$url .= '&page_r=' . $this->request->get['page_r'];
		}

		$data['sort_product'] = "javascript:ClickSort('&sort=pd.name" . $url . "');";
		$data['sort_author'] = "javascript:ClickSort('&sort=r.author" . $url . "');"; 
		$data['sort_rating'] = "javascript:ClickSort('&sort=r.rating" . $url . "');";
		$data['sort_status'] = "javascript:ClickSort('&sort=r.status" . $url . "');";
		$data['sort_date_added'] = "javascript:ClickSort('&sort=r.date_added" . $url . "');";
		
		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page_r = $page_r;
		$pagination->limit = $this->config->get('config_limit_admin');
		//$pagination->url = $this->url->link('catalog/review', 'user_token=' . $this->session->data['user_token'] . $url . '&page_r={page_r}', true);
		$pagination->url = "javascript:ClickSort('" . $url . "&page_r={page_r}');";
		
		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page_r - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page_r - 1) * $this->config->get('config_limit_admin')) > ($review_total - $this->config->get('config_limit_admin'))) ? $review_total : ((($page_r - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $review_total, ceil($review_total / $this->config->get('config_limit_admin')));

		$data['filter_author'] = $filter_author;
		$data['filter_status'] = $filter_status;
		$data['filter_date_added'] = $filter_date_added;

		$data['sort'] = $sort;
		$data['order'] = $order;

		return $data;
	}

	protected function getForm() {
		$data['text_form'] = !isset($this->request->get['review_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['rewiev-author'])) {
			$data['error_author'] = $this->error['rewiev-author'];
		} else {
			$data['error_author'] = '';
		}

		if (isset($this->error['rewiev-text'])) {
			$data['error_text'] = $this->error['rewiev-text'];
		} else {
			$data['error_text'] = '';
		}

		if (isset($this->error['rewiev-rating'])) {
			$data['error_rating'] = $this->error['rewiev-rating'];
		} else {
			$data['error_rating'] = '';
		}

		$url = '';
		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}
		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}
		if (isset($this->request->get['page_r'])) {
			$url .= '&page_r=' . $this->request->get['page_r'];
		}
		
		if (!isset($this->request->get['review_id'])) {
			$data['action'] = "ClickSave('add','" . $url . "');";
		} else {
			$data['action'] = "ClickSave('edit','" . $url . "&review_id=" . $this->request->get['review_id'] . "');";
		}

		if (isset($this->request->get['review_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$review_info = $this->model_catalog_review->getReview($this->request->get['review_id']);
		}

		$data['user_token'] = $this->session->data['user_token'];

		if (isset($this->request->get['product_id'])) {
			$data['product_id'] = $this->request->get['product_id'];
		} elseif (!empty($review_info)) {
			$data['product_id'] = $review_info['product_id'];
		} else {
			$data['product_id'] = '';
		}

		if (isset($this->request->post['author'])) {
			$data['author'] = $this->request->post['author'];
		} elseif (!empty($review_info)) {
			$data['author'] = $review_info['author'];
		} else {
			$data['author'] = '';
		}

		if (isset($this->request->post['text'])) {
			$data['text'] = $this->request->post['text'];
		} elseif (!empty($review_info)) {
			$data['text'] = $review_info['text'];
		} else {
			$data['text'] = '';
		}

		if (isset($this->request->post['rating'])) {
			$data['rating'] = $this->request->post['rating'];
		} elseif (!empty($review_info)) {
			$data['rating'] = $review_info['rating'];
		} else {
			$data['rating'] = '';
		}

		if (isset($this->request->post['date_added'])) {
			$data['date_added'] = $this->request->post['date_added'];
		} elseif (!empty($review_info)) {
			$data['date_added'] = ($review_info['date_added'] != '0000-00-00 00:00' ? $review_info['date_added'] : '');
		} else {
			$data['-date_added'] = '';
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($review_info)) {
			$data['status'] = $review_info['status'];
		} else {
			$data['status'] = '';
		}

		return $data;
	}

	protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/review')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['author']) < 3) || (utf8_strlen($this->request->post['author']) > 64)) {
			$this->error['rewiev-author'] = $this->language->get('error_author');
		}

		if (utf8_strlen($this->request->post['text']) < 1) {
			$this->error['rewiev-text'] = $this->language->get('error_text');
		}

		if (!isset($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
			$this->error['rewiev-rating'] = $this->language->get('error_rating');
		}

		return !$this->error;
	}

	protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/review')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
	
	protected function validateCopy() {
		if (!$this->user->hasPermission('modify', 'catalog/review')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
}