<?php if( ! defined('BASEPATH')) ecit('No direct script access allowed');

class Admin_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function check_login(){
	
		$username	=	$this->input->post('User');
		$password	=	$this->input->post('Pass');
		$return	=	FALSE;		
		$result	=	$this->db->where(array('username'=>$username,'password'=>$password))->get('admin')->result();
		
		if(count($result)==1){		
				$this->session->set_userdata('ADMIN_NAME',$result[0]->username);
				$this->session->set_userdata('ADMIN_ID',$result[0]->admin_id);	
				$return	=	TRUE;
		}
		
		return $return;		
	}

	
	function edit_admin() {
        $username   =   $this->input->post('username');
        $password   =   $this->input->post('password');  
        $old        =   $this->input->post('old_password'); 
        
        $this->db->where(array("username" => $this->session->userdata('ADMIN_NAME'),'password'=>$old));
        $query = $this->db->get('admin');
        
       
        $this->db->where(array("username" => $this->session->userdata('ADMIN_NAME'), "admin_id" => '1'));
        $this->db->update('admin', array('username'=>$username,'password'=>$password));
        $this->session->set_userdata(array('USERNAME' => $this->username));
    }

}