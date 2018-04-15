<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
        
        if (!isset($this->session->id) && ($this->session->status != 1)) {
            redirect('Welcome');
        }
    }

        public function index()
    {
        $data = array();
        $data['main_contant'] = $this->load->view('admin/admin_pages/category_add', '', True);
        $this->load->view('admin/index', $data);
    }
    
    // Management
    public function category_management()
    {
        $data = array();
        $data['view_category'] = $this->Category_model->View_Category();
        $data['main_contant'] = $this->load->view('admin/admin_pages/category_management', $data, True);
        $this->load->view('admin/index', $data);
    }
    
    // Create
    public function Create()
    {
       //code here...
       $this->load->model('Category_model');
       $this->Category_model->Save_Category();
       $this->session->set_userdata('message', 'Category add successfuly!');
       redirect('Category-Add');
    }
    
    // Unpublished
    public function Unpublished($id, $status)
    {
       //code here...
        $this->Category_model->unpublished($id, $status);
        $this->session->set_userdata('message', 'Category Unpublished successfuly!');
        redirect('Category-Management');
    }
    
    // Published
    public function Published($id, $status)
    {
       //code here...
        $this->Category_model->published($id, $status);
        $this->session->set_userdata('message', 'Category Published successfuly!');
        redirect('Category-Management');
    }

    // Edit
    public function Edit($id)
    {
        //code here...
         $data = array();
        $data['single_category'] = $this->Category_model->Single_View_Category($id);
        $data['main_contant'] = $this->load->view('admin/admin_pages/category_edit', $data, True);
        $this->load->view('admin/index', $data);
    }
    
    // Update Category
    public function Update() 
    {
        //code here....
        $id = $this->input->post('id', true);
        $this->Category_model->update();
        $this->session->set_userdata('message', 'Category Update Successfuly!');
        redirect('edit-category/'.$id);
    }


    // Delete
    public function Destory($id)
    {
        //code here...
        $this->Category_model->delete($id);
        $this->session->set_userdata('message', 'Category Delete Successfuly!');
        redirect('Category-Management');
    }
    
    
}
