<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {

	public function Save_Customer() {
		//code here...
		$save_customer = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_customer', $save_customer);
	}

	public function View_Customer() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$result = $this->db->get()->result();

		return $result;
	}

	// Delete
	public function Delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_customer');
	}

	// Edit
	public function Single_customer_view($id) {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_customer');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();

		return $result;
	}

	// update
	public function Update() {
		// code here...
		$data = array();
		$id = $this->input->post('id', true);
		$data['shop_name'] = $this->input->post('shop_name', true);
		$data['customer_name'] = $this->input->post('customer_name', true);
		$data['mobile'] = $this->input->post('mobile', true);
		$data['address'] = $this->input->post('address', true);
		$data['status'] = $this->input->post('status', true);

		$this->db->where('id', $id);
		$this->db->update('tbl_customer', $data);
	}

}
