<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public function Save_Employee() {
		//code here...
		$save_employee = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_employee', $save_employee);
	}

	public function View_Employee() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_employee');
		$result = $this->db->get()->result();

		return $result;
	}

// Delete
	public function Delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_employee');
	}

// Edit
	public function Single_employee_view($id) {
// code here...
		$this->db->select('*');
		$this->db->from('tbl_employee');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();

		return $result;
	}

// update
	public function Update() {
// code here...
		$data = array();
		$id = $this->input->post('id', true);
		$data['employee_name'] = $this->input->post('employee_name', true);
		$data['mobile'] = $this->input->post('mobile', true);
		$data['address'] = $this->input->post('address', true);
		$data['status'] = $this->input->post('status', true);

		$this->db->where('id', $id);
		$this->db->update('tbl_employee', $data);
	}

}
