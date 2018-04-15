<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        if (isset($this->session->id)) {
            redirect('admin');
        } else {
            $this->load->view('login');
        }
    }

    public function login() {

        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $user_details = $this->admin_model->get_user_details($email);
        
        if($user_details->password == $password)
        {
             if ($user_details->status == 1)
             {
                $session_data['id'] = $user_details->id;
                $session_data['name'] = $user_details->name;
                $session_data['email'] = $user_details->email;
                $session_data['status'] = $user_details->status;
                $this->session->set_userdata($session_data);
                redirect('admin');
             }
             else
             {
                $session_data = array();
                $session_data['message'] = "Invalid email & password!";
                $this->sesion->set_userdata($session_data);
                redirect('Welcome');
             }
        }
        else
        {
            $session_data = array();
            $session_data['message'] = "Invalid email & password!";
            $this->session->set_userdata($session_data);
            redirect('Welcome');
        }
    }
    
    public function sign_out()
    {
        $this->session->sess_destroy();
	redirect('Welcome');
    }


}
