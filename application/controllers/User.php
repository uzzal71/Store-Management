<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('User_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		//code here....
		$data = array();
		$data['main_contant'] = $this->load->view('admin/admin_pages/user_add', '', TRUE);
		$this->load->view('admin/index', $data);
	}

	// Management
	public function User_management() {
		$data = array();
		$data['view_user'] = $this->User_model->View_User();
		$data['main_contant'] = $this->load->view('admin/admin_pages/user_management', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Create
	public function Create() {
		//code here...
		$this->load->model('User_model');
		$this->User_model->Save_User();
		$this->session->set_userdata('message', 'User add successfuly!');
		redirect('User-add');
	}

	// Edit
	public function Edit($id) {
		//code here...
		$data = array();
		$data['single_user'] = $this->User_model->Single_user_view($id);
		$data['main_contant'] = $this->load->view('admin/admin_pages/user_edit', $data, True);
		$this->load->view('admin/index', $data);
	}

	// Update Category
	public function Update() {
		//code here....
		$id = $this->input->post('id', true);
		$this->User_model->Update();
		$this->session->set_userdata('message', 'User Update Successfuly!');
		redirect('edit-user/' . $id);
	}

	// Delete
	public function Destory($id) {
		//code here...
		$this->User_model->Delete($id);
		$this->session->set_userdata('message', 'User Delete Successfuly!');
		redirect('User-Management');
	}

}
