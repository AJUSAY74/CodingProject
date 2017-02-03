<?php
class Admin extends CI_Model{
    public function get_admin_by_email($email){
        $query = "SELECT * FROM admin WHERE email = ?";
        return $this->db->query($query, array($email))->row_array();
    }
    public function signin_validation(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', "required|valid_email");
        $this->form_validation->set_rules('password', 'Password', "required");
        if($this->form_validation->run()){
            return true;
        }
        else{
            $this->session->set_flashdata('message', "Invalid email or password");
            return false;
        }
    }
    public function add_product_to_inv($item_name, $desc, $price, $photo_url){
        $query = "INSERT INTO products(item_name, description, prices) VALUES (?, ?, ?, ?)";
        return $this->db->query($query, array($item_name, $desc, $price, $photo_url));
    }
    public function into_inv($product_id, $category_id){
        $query = "INSERT INTO products_has_categories(products_id, categories_id) VALUES (?,?); INSERT INTO inventories(products_id, inventory_qty, qty_sold) VALUES (?, 0, 0)";
        return $this->db->query($query, array($product_id, $category_id, $product_id));
    }
    public function edit_product_in_inv($item_name, $desc, $price, $category_id){
        $query = "UPDATE products SET item_name = ?, description = ?, prices = ? WHERE id = ?; UPDATE products_has_categories SET categories_id = ? WHERE product_id = ?";
        return $this->db->query($query, array($item_name, $desc, $price, $category_id));
    }
    public function product_form_validate(){
        $this->load->library('form_validation');
        $this->form_validate->set_rules('productname', 'Product Name', "required|alpha_dash");
        $this->form_validate->set_rules('description', 'Description', "required|alpha_numeric_spaces");
        if($this->form_validation->run()){
            return true;
        }
        else{
            $this->session->set_flashdata('message', "Please enter valid product information.");
            return false;
        }
    }
    public function remove_product_from_inv($id){
        $query = "DELETE FROM produts WHERE id = ?";
        return $this->db->query($query, array($id));
    }
}
 ?>
