<?php
class Product extends CI_Model{
    public function get_products(){
        $query = "SELECT products.photo_url, products.id, products.item_name, products.prices, inventories.inventory_qty, inventories.qty_sold FROM products JOIN inventories ON inventories.products_id = products.id WHERE photos.is_main = 1";
        return $this->db->query($query)->result_array();
    }
    public function get_products_sorted_price(){
        $query = "SELECT products.photo_url, products.id, products.item_name, products.prices FROM products ORDER BY products.prices ASC";
        return $this->db->query($query)->result_array();
    }
    public function get_products_sorted_pop(){
        $query = "SELECT products.photo_url, products.id, products.item_name, products.prices, inventories.qty_sold FROM products JOIN inventories ON inventories.products_id = products.id WHERE photos.is_main = 1 ORDER BY inventories.qty_sold DESC";
        return $this->db->query($query)->result_array();
    }
    public function get_product_by_id($id){
        $query = "SELECT products.id AS product_id, products.prices, products.item_name, products.description, categories.category FROM products JOIN products_has_categories ON products_has_categories.products_id = products.id JOIN categories ON categories.id = products_has_categories.categories_id WHERE id = ?";
        return $this->db->query($query, array($id))->row_array();
    }
    public function get_products_by_name($name){
        $query = "SELECT products.photo, products.id, products.item_name, products.prices WHERE products.item_name LIKE '%?%' ";
        return $this->db->query($query, array($name))->result_array();
    }
}
 ?>
