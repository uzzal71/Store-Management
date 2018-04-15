<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Store_model extends CI_Model {
	// code here...
	public function view_product() {
		//category view function
		$this->db->select('*');
		$this->db->from('tbl_product');
		$this->db->where('status', 1);
		$result = $this->db->get()->result();

		return $result;
	}

	public function Save_Store() {
		//code here...
		$save_store = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_store', $save_store);
	}

	public function View_Store() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_store');
		$result = $this->db->get()->result();

		return $result;
	}

	// Edit
	public function Single_View_store($id) {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_store');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();

		return $result;
	}

	// update
	public function update() {
		// code here...
		$data = array();
		$id = $this->input->post('id', true);
		$data['product_name'] = $this->input->post('product_name', true);
		$data['quantity'] = $this->input->post('quantity', true);
		$this->db->where('id', $id);
		$this->db->update('tbl_store', $data);
	}

}
