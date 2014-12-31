<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function index() {
        if($this->session->userdata('ADMIN_NAME')==TRUE){
            redirect(base_url().'admin');
        }
        $this->load->library('form_validation');
        $this->load->model('admin_model');
        $this->load->helper(array('form','url'));
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        $data['error_message'] = '';

        if ($this->form_validation->run() === TRUE) {
            if ($this->admin_model->check_login() === TRUE) {
              redirect(base_url().'admin');
            }
            $data['error_message'] = 'Invalid Username or Password';
        }
        $this->load->view('admin/login', $data);
    }
 
}

