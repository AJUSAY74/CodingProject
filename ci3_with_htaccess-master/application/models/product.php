<?php

Class Product extends CI_Model{

	public function all()
	{
		return $this->db->query("SELECT * FROM products")->result_array();
	}

	function create($post)
	{
		$query = "INSERT INTO products (Name, Description, Price, created_at) VALUES (?,?,?,?)";
		$values = array($post['Name'], $post['Description'], $post['Price'], date('Y-m-d H:i:s'));

		return $this->db->query($query, $values);
	}

	function find_by($id)
	{
		$query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);

		return $this->db->query($query, $values)->row_array();
	}

	function edit($post, $id)
	{
		$query = "UPDATE products SET Name=?, Description=?, Price=?, updated_at=? WHERE id = ?";
		$values = array($post['Name'], $post['Description'], $post['Price'], date('Y-m-d H:i:s'), $id);

		return $this->db->query($query, $values);
	}

	function delete_item($id)
	{
		$query = "DELETE FROM products WHERE id = ?";
		$values = array($id);

		return $this->db->query($query, $values);
	}
}
