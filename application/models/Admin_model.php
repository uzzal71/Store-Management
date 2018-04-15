<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

public function get_user_details($email) {

$user_details = $this->db->select('*')
        ->from('tbl_user')
        ->where('email', $email)
        ->where('status', 1)
        ->get()
        ->row();
return $user_details;

//End Get User Details
}

//End Admin Model
}

