<?php
class ControllerExtensionModuleRelatedDavziz extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/related_davziz');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$this->load->model('extension/module/relateddavziz');

		$data['products'] = array();
		$num_array_cat = "";

		//Estrai il product_id della pagina corrente.
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = "null";
		}

		//Setta il limite di visualizzazione se non presente.
		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}
		//Numero dei prodotti visualizzati min 4!
		$num_vis = $setting['limit'];


		if ( isset($product_id) and !($product_id == "null")) {
			/* Modalità Active */
			//Categoria parente.
			$cat_active = $this->model_extension_module_relateddavziz->getCategory($product_id);
			//Prodotti corelati alla cat.
			$list_active = $this->model_extension_module_relateddavziz->getProdCat($cat_active['category_id']);
			//Conteggio array estrazione categoria.
			$num_array_cat = count($list_active);

	    	if ($num_array_cat > 1 ) {
	    		//Selezione Random dell'array della lista.
			    if(count($list_active) < $num_vis) {
					$num_vis = count($list_active);
				}
	    		$random_active = array_rand($list_active,$num_vis);
	    	} else {
	    		//Quanto il prodotto non ha altri prodotti simili.
	    		$random_active = array();
	    	}
    	}

    	

		/* Modalità Random */
		//Estrazione di tutto il catalogo
		$data_lists = $this->model_extension_module_relateddavziz->ListProduct();
		//Conteggio array estrazione categoria.
		$num_array_ran = count($data_lists);
		//Selezione n° random dell'array della lista prodotti
		$data_random = array_rand($data_lists,$num_vis);


		/*
		*
		* Inizio processo
		*
		*/

		if ($setting['type'] == 1 and $num_array_cat >= 4 ) { //Active o maggiore uguale di 4
			
			foreach ($random_active as $key_ran) {
			
			$list_pro = $list_active[$key_ran];
				
				foreach ($list_pro as $product_id) {

					//Estrazione dei valori per stamparli
					$product_info = $this->model_catalog_product->getProduct($product_id);

					if ($product_info) {
						if ($product_info['image']) {
							$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
						}

						if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
							$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$price = false;
						}

						if ((float)$product_info['special']) {
							$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$special = false;
						}

						if ($this->config->get('config_tax')) {
							$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
						} else {
							$tax = false;
						}

						if ($this->config->get('config_review_status')) {
							$rating = $product_info['rating'];
						} else {
							$rating = false;
						}

						$data['products'][] = array(
							'product_id'  => $product_info['product_id'],
							'thumb'       => $image,
							'name'        => $product_info['name'],
							'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
							'price'       => $price,
							'special'     => $special,
							'tax'         => $tax,
							'rating'      => $rating,
							'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
						);
					}

				}
			}

		} elseif ($setting['type'] == 0 and $num_array_ran >= 4 ) { //Random o maggiore uguale di 4

			foreach ($data_random as $key_ran_) {
			
			$list_pro_ = $data_lists[$key_ran_];
			
				foreach ($list_pro_ as $product_id) {

					//Estrazione dei valori per stamparli
					$product_info = $this->model_catalog_product->getProduct($product_id);

					if ($product_info) {
						if ($product_info['image']) {
							$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
						}

						if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
							$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$price = false;
						}

						if ((float)$product_info['special']) {
							$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$special = false;
						}

						if ($this->config->get('config_tax')) {
							$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
						} else {
							$tax = false;
						}

						if ($this->config->get('config_review_status')) {
							$rating = $product_info['rating'];
						} else {
							$rating = false;
						}

						$data['products'][] = array(
							'product_id'  => $product_info['product_id'],
							'thumb'       => $image,
							'name'        => $product_info['name'],
							'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
							'price'       => $price,
							'special'     => $special,
							'tax'         => $tax,
							'rating'      => $rating,
							'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
						);
					}
				}
			}
			
		} else {

			foreach ($data_random as $key_ran_) {
			
			$list_pro_ = $data_lists[$key_ran_];
			
				foreach ($list_pro_ as $product_id) {

					//Estrazione dei valori per stamparli
					$product_info = $this->model_catalog_product->getProduct($product_id);

					if ($product_info) {
						if ($product_info['image']) {
							$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
						} else {
							$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
						}

						if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
							$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$price = false;
						}

						if ((float)$product_info['special']) {
							$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						} else {
							$special = false;
						}

						if ($this->config->get('config_tax')) {
							$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
						} else {
							$tax = false;
						}

						if ($this->config->get('config_review_status')) {
							$rating = $product_info['rating'];
						} else {
							$rating = false;
						}

						$data['products'][] = array(
							'product_id'  => $product_info['product_id'],
							'thumb'       => $image,
							'name'        => $product_info['name'],
							'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
							'price'       => $price,
							'special'     => $special,
							'tax'         => $tax,
							'rating'      => $rating,
							'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
						);
					}
				}
			}

		}

		if ($data['products']) {
			return $this->load->view('extension/module/related_davziz', $data);
		}
	}
}