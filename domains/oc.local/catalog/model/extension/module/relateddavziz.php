<?php
class ModelExtensionModuleRelatedDavziz extends Model {

	public function ListProduct()
	{
		$sql = "SELECT product_id FROM " . DB_PREFIX . "product WHERE status = 1 ";
		$query = $this->db->query($sql);
		return $query->rows;
	}

	public function getCategory($product_id)
	{
		$query = $this->db->query("SELECT category_id FROM " . DB_PREFIX . "product_to_category WHERE product_id = " . $product_id);
		return $query->row;
	}

	public function getProdCat($category_id)
	{
		$query = $this->db->query("SELECT product_id FROM " . DB_PREFIX . "product_to_category WHERE category_id = " . $category_id);
		return $query->rows;
	}

}