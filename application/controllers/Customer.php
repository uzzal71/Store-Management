<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('Customer_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		//code here....
		$data = array();
		$data['main_contant'] = $this->load->view('admin/admin_pages/customer_add', '', TRUE);
		$this->load->view('admin/index', $data);
	}

	// Management
	public function Customer_management() {
		$data = array();
		$data['view_customer'] = $this->Customer_model->View_Customer();
		$data['main_contant'] = $this->load->view('admin/admin_pages/customer_management', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Create
	public function Create() {
		//code here...
		$this->load->model('Customer_model');
		$this->Customer_model->Save_Customer();
		$this->session->set_userdata('message', 'Customer add successfuly!');
		redirect('Customer-add');
	}

	// Edit
	public function Edit($id) {
		//code here...
		$data = array();
		$data['single_customer'] = $this->Customer_model->Single_customer_view($id);
		$data['main_contant'] = $this->load->view('admin/admin_pages/customer_edit', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Update Category
	public function Update() {
		//code here....
		$id = $this->input->post('id', true);
		$this->Customer_model->Update();
		$this->session->set_userdata('message', 'Customer Update Successfuly!');
		redirect('edit-customer/' . $id);
	}

	// Delete
	public function Destory($id) {
		//code here...
		$this->Customer_model->Delete($id);
		$this->session->set_userdata('message', 'Customer Delete Successfuly!');
		redirect('Customer-Management');
	}

}
