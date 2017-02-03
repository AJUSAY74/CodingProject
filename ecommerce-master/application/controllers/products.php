<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('product_page1');
	}

	public function Pay(){
		$this->load->model("order");

	}
}
