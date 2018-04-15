<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	public function Save_Category() {
		//code here...
		$save_category = $this->input->post(NULL, TRUE);
		$this->db->insert('tbl_category', $save_category);
	}

	public function View_Category() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_category');
		$result = $this->db->get()->result();

		return $result;
	}

	// Unpublished
	public function unpublished($id, $status) {
		$data['status'] = $status;
		$this->db->where('id', $id);
		$this->db->update('tbl_category', $data);
	}

	// Published
	public function published($id, $status) {
		$data['status'] = $status;
		$this->db->where('id', $id);
		$this->db->update('tbl_category', $data);
	}

	// Delete
	public function delete($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_category');
	}

	// Edit
	public function Single_View_Category($id) {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_category');
		$this->db->where('id', $id);
		$result = $this->db->get()->row();

		return $result;
	}

	// update
	public function update() {
		// code here...
		$data = array();
		$id = $this->input->post('id', true);
		$data['category_name'] = $this->input->post('category_name', true);
		$data['category_description'] = $this->input->post('category_description', true);
		$data['status'] = $this->input->post('status', true);

		$this->db->where('id', $id);
		$this->db->update('tbl_category', $data);
	}

}
