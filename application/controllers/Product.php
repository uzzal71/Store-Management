<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('Product_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		//code here....
		$data = array();
		$data['category_view'] = $this->Product_model->view_category();
		$data['main_contant'] = $this->load->view('admin/admin_pages/product_add', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	// Management
	public function product_management() {
		$data = array();
		$data['view_product'] = $this->Product_model->View_Product();
		$data['main_contant'] = $this->load->view('admin/admin_pages/product_management', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Create
	public function Create() {
		//code here...
		$this->load->model('Product_model');
		$this->Product_model->Save_Product();
		$this->session->set_userdata('message', 'Product add successfuly!');
		redirect('Product-add');
	}

	// Unpublished
	public function Unpublished($id, $status) {
		//code here...
		$this->Product_model->unpublished($id, $status);
		$this->session->set_userdata('message', 'Product Unpublished successfuly!');
		redirect('Product-Management');
	}

	// Published
	public function Published($id, $status) {
		//code here...
		$this->Product_model->published($id, $status);
		$this->session->set_userdata('message', 'Product Published successfuly!');
		redirect('Product-Management');
	}

	// Edit
	public function Edit($id) {
		//code here...
		$data = array();
		$data['category_view'] = $this->Product_model->view_category();
		$data['single_product'] = $this->Product_model->Single_View_Product($id);
		$data['main_contant'] = $this->load->view('admin/admin_pages/product_edit', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Update Category
	public function Update() {
		//code here....
		$id = $this->input->post('id', true);
		$this->Product_model->update();
		$this->session->set_userdata('message', 'Product Update Successfuly!');
		redirect('edit-product/' . $id);
	}

	// Delete
	public function Destory($id) {
		//code here...
		$this->Product_model->delete($id);
		$this->session->set_userdata('message', 'Product Delete Successfuly!');
		redirect('Product-Management');
	}

}
