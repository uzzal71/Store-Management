<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('Store_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		//code here....
		$data = array();
		$data['product_view'] = $this->Store_model->view_product();
		$data['main_contant'] = $this->load->view('admin/admin_pages/store_add', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	// Management
	public function Store_management() {
		$data = array();
		$data['view_store'] = $this->Store_model->View_Store();
		$data['main_contant'] = $this->load->view('admin/admin_pages/store_management', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Create
	public function Create() {
		//code here...
		$this->load->model('Store_model');
		$this->Store_model->Save_Store();
		$this->session->set_userdata('message', 'Store add successfuly!');
		redirect('Store-add');
	}

	// Edit
	public function Edit($id) {
		//code here...
		$data = array();
		$data['product_view'] = $this->Store_model->view_product();
		$data['single_store'] = $this->Store_model->Single_View_store($id);
		$data['main_contant'] = $this->load->view('admin/admin_pages/store_edit', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Update Category
	public function Update() {
		//code here....
		$id = $this->input->post('id', true);
		$this->Store_model->update();
		$this->session->set_userdata('message', 'Store Update Successfuly!');
		redirect('edit-store/' . $id);
	}

}
