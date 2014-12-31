<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		if($this->session->userdata('ADMIN_NAME')==FALSE){
			redirect(base_url().'login');
		}
	}

	function index(){	
		$data  =  array();
	    $data['base_url']  =  base_url();
		$this->load->view('admin/index',$data);

	}
	
	function category() {
		$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('category_model');
        $data['category'] = $this->category_model->list_category();
        $this->load->view('admin/categorylist', $data);
    }

    function addcategory($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model('category_model');
        if($_POST){
        	
        	$this->form_validation->set_rules('title', 'Title', 'required');	
        	if ($this->form_validation->run() == TRUE) {
        		$this->category_model->add_category($id);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated category successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added category successfully");	
        		}
        		redirect(base_url().'admin/addcategory/'.$id);
        	}
        }else{
        	$category   =   $this->category_model->get_category($id);
	        if(!empty($category)){
	        	foreach($category as $row){
	        		$data['id']    =  $row->id;
	        		$data['title'] =  $row->name;
	        	}
	        }else{
	        	$data['id']    =  '';
	        	$data['title'] =  '';
	        }
	        $this->load->view('admin/addcategory',$data);

        }
     
            
    }

    function deletecategory($id = NULL) {
        $this->load->model('category_model');	
		$this->category_model->deletecategory($id);
		$this->session->set_flashdata('msg',"Deleted category successfully");
        redirect(base_url().'admin/category');
    }


	
}