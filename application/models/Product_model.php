<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
	// code here...
	public function view_category() {
		//category view function
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('status', 1);
		$result = $this->db->get()->result();

		return $result;
	}

	public function Save_Product() {
		//code here...
		$save_product = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_product', $save_product);
	}

	public function View_Product() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_product');
		$result = $this->db->get()->result();

		return $result;
	}

	// Unpublished
	public function unpublished($id, $status) {
		$data['status'] = $status;
		$this->db->where('id', $id);
		$this->db->update('tbl_product', $data);
	}

	// Published
	public function published($id, $status) {
		$data['status'] = $status;
		$this->db->where('id', $id);
		$this->db->update('tbl_product', $data);
	}

	// Delete
	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_product');
	}

	// Edit
	public function Single_View_Product($id) {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_product');
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
		$data['product_category'] = $this->input->post('product_category', true);
		$data['product_description'] = $this->input->post('product_description', true);
		$data['status'] = $this->input->post('status', true);

		$this->db->where('id', $id);
		$this->db->update('tbl_product', $data);
	}

}
