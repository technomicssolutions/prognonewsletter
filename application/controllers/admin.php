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
	        		$data['title'] =  $row->title;
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

    function contact() {
		$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('contact_model');
        $data['contact'] = $this->contact_model->list_contact();
        $this->load->view('admin/contactlist', $data);
    }

    function addcontact($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model(array('contact_model','category_model'));
        if($_POST){
        	$this->form_validation->set_rules('name', 'Name', 'trim|required');
        	$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');	
        	if ($this->form_validation->run() == TRUE) {
        		$this->contact_model->add_contact($id);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated contact successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added contact successfully");	
        		}
        		redirect(base_url().'admin/addcontact/'.$id);
        	}
        }else{
        	$data['categories'] = $this->category_model->list_category();
        	$contact   =   $this->contact_model->get_contact($id);
	        if(!empty($contact)){
	        	foreach($contact as $row){
	        		$data['id']           =  $row->id;
	        		$data['category']     =  $row->category;
	        		$data['name']         =  $row->name;
	        		$data['email']        =  $row->email;
	        	}
	        }else{
	        	$data['id']           =  '';
	        	$data['category']     =  '';
	        	$data['name']         =  '';
	        	$data['email']        =  '';
	        }
	        $this->load->view('admin/addcontact',$data);

        }
     
            
    }

    function deletecontact($id = NULL) {
        $this->load->model('contact_model');	
		$this->contact_model->deletecontact($id);
		$this->session->set_flashdata('msg',"Deleted contact successfully");
        redirect(base_url().'admin/contact');
    }

    function content() {
		$data['base_url']   =  base_url();
       	$this->load->helper(array('form'));
		$this->load->model('content_model');
        $data['content'] = $this->content_model->list_content();
        $this->load->view('admin/contentlist', $data);
    }

    function addcontent($id  =  NULL){
        $data['base_url']   =  base_url();
        $this->load->helper(array('form'));
        $this->load->library('form_validation');
        $this->load->model(array('content_model'));
        if($_POST){
        	$this->form_validation->set_rules('name', 'Name', 'required');
        	$this->form_validation->set_rules('content', 'Content', 'required');
        	$this->form_validation->set_rules('url', 'Url', 'required');	
        	$this->form_validation->set_rules('image', 'Image', 'required');		
        	if ($this->form_validation->run() == TRUE) {
        		$this->content_model->add_content($id);
        		if(!empty($id)){
        			$this->session->set_flashdata('msg',"Updated content successfully");
        		}else{
        			$this->session->set_flashdata('msg',"Added content successfully");	
        		}
        		redirect(base_url().'admin/addcontent/'.$id);
        	}
        }else{
        	//$data['categories'] = $this->content_model->list_content();
        	$content   =   $this->content_model->get_content($id);
	        if(!empty($content)){
	        	foreach($content as $row){
	        		$data['id']           =  $row->id;
	        		$data['name']         =  $row->name;
	        		$data['content']      =  $row->content;
	        		$data['url']          =  $row->url;
	        		$data['image']        =  $row->email;
	        	}
	        }else{
	        	$data['id']           =  '';
	        	$data['name']         =  '';
	        	$data['content']      =  '';
	        	$data['url']          =  '';
	        	$data['image']        =  '';
	        }
	        $this->load->view('admin/addcontent',$data);
        }
    }

    function deletecontent($id = NULL) {
        $this->load->model('content_model');	
		$this->contact_model->deletecontent($id);
		$this->session->set_flashdata('msg',"Deleted content successfully");
        redirect(base_url().'admin/content');
    }



	
}