<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function Save_User() {
		//code here...
		$save_user = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_user', $save_user);
	}

	public function View_User() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_user');
		$result = $this->db->get()->result();

		return $result;
	}

// Delete
	public function Delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_user');
	}

// Edit
	public function Single_user_view($id) {
// code here...
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();

		return $result;
	}

// update
	public function Update() {
// code here...
		$data = array();
		$id = $this->input->post('id', true);
		$data['name'] = $this->input->post('name', true);
		$data['email'] = $this->input->post('email', true);
		$data['password'] = $this->input->post('password', true);
		$data['status'] = $this->input->post('status', true);

		$this->db->where('id', $id);
		$this->db->update('tbl_user', $data);
	}

}
