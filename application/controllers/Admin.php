<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

        if (!isset($this->session->id) && ($this->session->status != 1)) {
            redirect('Welcome');
        }
    }

    public function index() {
        $data = array();
        $data['main_contant'] = $this->load->view('admin/admin_pages/dashboard', '', True);
        $this->load->view('admin/index', $data);
    }

}

?>