<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array("form","url"));
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function dashboard_products(){
		$this->load->view("dashboard_products");
	}

	public function dashboard_orders(){
		$this->load->view("dashboard_orders");
	}

	public function login(){

		$this->load->model("admin");
		if($this->admin->signin_validation())
		{
		$admin = $this->admin->get_admin_by_email($this->input->post("email"));

			if($admin)
			{
				$password = $this->input->post("password");

				if($password == $admin["password"])
				{
					$this->session->set_userdata("loggedin", true);
					redirect("/products");
				}
			}
		}
		redirect("/");
	}

	public function Logout(){
		$this->session->sess_destroy();
		redirect("login");
	}

	public function itemDelete($id){

		$this->load->model("admin");
		if($this->input->post("deleteverification") == true)
		{
		$this->admin->remove_product_from_inv($id);
		}
	}

	public function itemAdd(){
		$this->load->model("admin");
		$this->load->model("product");
		$product = $this->input->post("productname");
		$description = $this->input->post("description");
		$category = $this->input->post("category");
		$price = $this->input->post("price");

        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 999999;
        $config['max_width']            = 999999;
        $config['max_height']           = 999999;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata($error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $filename = $this->upload->data("full_path");
        }

		if($this->input->post("newcategory") != NULL)
		{
			$category = $this->input->post("newcategory");
			$this->load->model("category");
			$this->category->add_category($category);
		}
		$this->admin->add_product_to_inv($product, $description, $price, $filename);
		$toadd = $this->product->get_product_by_name($product);
		$this->admin->into_inv($toadd['id'], $category);
		redirect("/products");
	}

	public function itemEdit($id){
		$this->load->model("admin");
		$this->load->model("product");

		$productid = $this->product->get_product_by_id($id);
		$product = $this->input->post("productname");
		$description = $this->input->post("description");
		$category = $this->input->post("category");
		$price = $this->input->post("price");

        $config['upload_path']          = './assets/images/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 999999;
        $config['max_width']            = 999999;
        $config['max_height']           = 999999;
        $this->load->library('upload', $config);

        if ($this->input->post("userfile"))
        {
            $data = array('upload_data' => $this->upload->data());
            $filename = $this->upload->data("full_path");
        }

		if($this->input->post("newcategory") != NULL)
		{
			$category = $this->input->post("newcategory");
			$this->load->model("category");
			$this->category->add_category($category);
		}

		if($this->input->post("newcategory") != NULL)
		{
			$category = $this->input->post("newcategory");
			$this->load->model("category");
			$this->category->add_category($category);
		}
		$this->admin->edit_product_in_inv($product, $description, $category, $filename);
		redirect("/products");
	}

	public function categoryEdit($id){

		$this->load->model("category");
		$category = $this->input->post("newcategory2");
		$this->category->edit_category($id, $category);
	}

	public function categoryDelete($id){

		$this->load->model("category");
		$this->category->edit_category($id);
	}

	public function getOrders(){
		$this->load->model("order");
		$this->order->get_order_by_id();
	}

	public function Upload()
        {
	        $config['upload_path']          = './assets/images/';
	        $config['allowed_types']        = 'gif|jpg|png';
	        $config['max_size']             = 999999;
	        $config['max_width']            = 999999;
	        $config['max_height']           = 999999;
	        $this->load->library("upload", $config);
			$data = array('upload_data' => $this->upload->data());
        }
}
