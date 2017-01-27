<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product');
	}

	public function index()
	{
		$data['products'] = $this->Product->all();
		$this->load->view('index',$data);
	}

	public function new_product()
	{
		$this->load->view('new');
	}

	public function edit($id)
	{
		$data['product'] = $this->Product->find_by($id);
		$this->load->view("edit", $data);
	}

	public function show($id)
	{
		$data['product'] = $this->Product->find_by($id);
		$this->load->view("product_page", $data);
	}

	public function create()
	{
		$post = $this->input->post();
		$this->Product->create($post);
		$id = $this->db->insert_id();
		redirect(base_url());
	}

	public function destroy($id)
	{
		$this->Product->delete_item($id);
		$this->index();
	}

	public function update($id)
	{
		$post = $this->input->post();
		$this->Product->edit($post, $id);
		$this->show($id);
	}

}
