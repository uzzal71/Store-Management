<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('Employee_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		//code here....
		$data = array();
		$data['main_contant'] = $this->load->view('admin/admin_pages/employee_add', '', TRUE);
		$this->load->view('admin/index', $data);
	}

	// Management
	public function Employee_management() {
		$data = array();
		$data['view_employee'] = $this->Employee_model->View_Employee();
		$data['main_contant'] = $this->load->view('admin/admin_pages/employee_management', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Create
	public function Create() {
		//code here...
		$this->load->model('Employee_model');
		$this->Employee_model->Save_Employee();
		$this->session->set_userdata('message', 'Employee add successfuly!');
		redirect('Employee-add');
	}

	// Edit
	public function Edit($id) {
		//code here...
		$data = array();
		$data['single_employee'] = $this->Employee_model->Single_employee_view($id);
		$data['main_contant'] = $this->load->view('admin/admin_pages/employee_edit', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Update Category
	public function Update() {
		//code here....
		$id = $this->input->post('id', true);
		$this->Employee_model->Update();
		$this->session->set_userdata('message', 'Employee Update Successfuly!');
		redirect('edit-employee/' . $id);
	}

	// Delete
	public function Destory($id) {
		//code here...
		$this->Employee_model->Delete($id);
		$this->session->set_userdata('message', 'Employee Delete Successfuly!');
		redirect('Employee-Management');
	}

}
