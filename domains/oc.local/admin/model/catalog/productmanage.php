<?php
class ModelCatalogProductmanage extends Model {
	public function getCategories($data = array()) {
		$sql = "SELECT cp.category_id AS category_id, GROUP_CONCAT(cd1.name ORDER BY cp.level SEPARATOR '&nbsp;&nbsp;&gt;&nbsp;&nbsp;') AS name, c1.parent_id, c1.sort_order, c1.status,(select count(product_id) as product_count from " . DB_PREFIX . "product_to_category pc where pc.category_id = c1.category_id) as product_count FROM " . DB_PREFIX . "category_path cp LEFT JOIN " . DB_PREFIX . "category c1 ON (cp.category_id = c1.category_id) LEFT JOIN " . DB_PREFIX . "category c2 ON (cp.path_id = c2.category_id) LEFT JOIN " . DB_PREFIX . "category_description cd1 ON (cp.path_id = cd1.category_id) LEFT JOIN " . DB_PREFIX . "category_description cd2 ON (cp.category_id = cd2.category_id) WHERE cd1.language_id = '" . (int)$this->config->get('config_language_id') . "' AND cd2.language_id = '" . (int)$this->config->get('config_language_id') . "'";

		if (isset($data['filter_orphan'])) {
			$sql .= " AND p.product_id NOT IN (SELECT product_id FROM " . DB_PREFIX . "product_to_category)";
		}
         if (!empty($data['filter_product_id'])) {
			 $sql .= " AND p.product_id LIKE '%" . $this->db->escape($data['filter_product_id']) . "%'";
		}
		if (!empty($data['filter_name'])) {
			$sql .= " AND cd2.name LIKE '" . $this->db->escape($data['filter_name']) . "%'";
		}
		$sql .= " GROUP BY cp.category_id";
		$sort_data = array(
			'product_count',
			'name',
			'sort_order'
		);
		if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
			$sql .= " ORDER BY " . $data['sort'];
		} else {
			$sql .= " ORDER BY sort_order";
		}
		if (isset($data['order']) && ($data['order'] == 'DESC')) {
			$sql .= " DESC";
		} else {
			$sql .= " ASC";
		}
		if (isset($data['start']) || isset($data['limit'])) {
			if ($data['start'] < 0) {
				$data['start'] = 0;
			}
			if ($data['limit'] < 1) {
				$data['limit'] = 20;
			}
			$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
		}
		$query = $this->db->query($sql);
		return $query->rows;
	}
	public function copyProducttocategory($product_id,$category_id) {
		//echo "SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' AND category_id = '" . (int)$category_id . "'";die;
         if(($product_id!='')&&($category_id!='')){
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' AND category_id = '" . (int)$category_id . "'");
            if($query->num_rows==0){
				$query1 = "insert into " . DB_PREFIX . "product_to_category SET product_id = '".$product_id."', category_id = '" . (int)$category_id . "'";
				$this->db->query($query1);    
			}            
		} 
	}
        
	public function copyProducttocategorystore($product_id,$cat_store){
		if(($product_id!='')&&($cat_store!='')){
            $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "' AND store_id = '" . (int)$cat_store . "'");
            if($query->num_rows==0){
                $query1 = "insert into " . DB_PREFIX . "product_to_store SET product_id = '".$product_id."', store_id = '" . (int)$cat_store . "'";
				$this->db->query($query1);    
            }            
		}
	}
        
	public function removeproductfromoldcategory($product_id,$old_cat){
		if(($product_id!='')&&($old_cat!='')){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' AND category_id = '" . (int)$old_cat . "'");
			if($query->num_rows){
				$this->db->query("delete from " . DB_PREFIX . "product_to_category where product_id = '" . (int)$product_id . "' and  category_id = '" . (int)$old_cat . "'");
			}
		}
	}
        
	public function removeProductfromoldcategorystore($product_id,$old_cat_store){
		if(($product_id!='')&&($old_cat_store!='')){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_store WHERE product_id = '" . (int)$product_id . "' AND store_id = '" . (int)$old_cat_store . "'");
			if($query->num_rows){
				$this->db->query("delete from " . DB_PREFIX . "product_to_store where product_id = '" . (int)$product_id . "' and  store_id = '" . (int)$old_cat_store . "'");
			}
		}  
	}
        
	public function removeProductfromthecategory($product_id,$category_id){
		if(($product_id!='')&&($category_id!='')){
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_to_category WHERE product_id = '" . (int)$product_id . "' AND category_id != '" . (int)$category_id . "'");
			if($query->num_rows){
				$this->db->query("delete from " . DB_PREFIX . "product_to_category where product_id = '" . (int)$product_id . "' and  category_id = '" . (int)$category_id . "'");
			}
		}     
	}
	
	public function getCategoryStores($category_id) {
		$category_store_data = array();
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_to_store WHERE category_id = '" . (int)$category_id . "'");

		foreach ($query->rows as $result) {
			$category_store_data[] = $result['store_id'];
		}
		return $category_store_data;
	}

	public function enableProduct($product_id) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET `status` = IF (`status`, 0, 1) WHERE product_id = '" . (int)$product_id . "'");    
	}
	
	public function updateproductvalues($field,$product_id,$field_value) {
		$this->db->query("UPDATE " . DB_PREFIX . "product SET ".$field." = '" . $this->db->escape($field_value) . "' WHERE product_id = '" . (int)$product_id . "'");
	}

}
