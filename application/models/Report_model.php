<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Report_model extends CI_Model {
	// code here...

	public function View_Report() {
		// code here...
		$this->db->select('*');
		$this->db->from('tbl_store');
		$result = $this->db->get()->result();

		return $result;
	}

}
