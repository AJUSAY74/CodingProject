<?php
class Category extends CI_Model{
    public function get_categories(){
        $query = "SELECT * FROM categories";
        return $this->db->query($query)->result_array();
    }
    public function add_category($category){
        $query = "INSERT INTO categories(category) VALUES (?)";
        return $this->db->query($query,array($category));
    }
    public function edit_category($id, $rename){
        $query = "UPDATE categories SET category = ? WHERE id = ?";
        return $this->db->query($query, array($id, $rename));
    }
    public function delete_category($id){
        $query = "DELETE FROM categories WHERE id = ?";
        return $this->db->query($query);
    }
}
?>
