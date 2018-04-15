<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	//put your code here
	public function __construct() {
		parent::__construct();
		$this->load->model('Report_model');

		if (!isset($this->session->id) && ($this->session->status != 1)) {
			redirect('Welcome');
		}
	}

	public function index() {
		$data = array();
		$data['view_report'] = $this->Report_model->View_Report();
		$data['main_contant'] = $this->load->view('admin/admin_pages/product_report', $data, True);
		$this->load->view('admin/index', $data);
	}

}
