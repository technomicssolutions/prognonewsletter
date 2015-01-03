<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_model extends CI_Model {
    
    public $_table      = 'region';
    public $primary_key = 'id';
  
    function __construct() {
        parent::__construct();
       
    }

    function list_content() {
    	    
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    function add_contact($id = NULL) {
    	$data  =   array(
    		'name'     => $this->input->post('name'),
    		'content'  => $this->input->post('content'),
    		'url'      => $this->input->post('url'),
    		'image'    => $this->input->post('image'),
    	);
        if(empty($id)){
            $this->db->insert($this->_table,$data);
        }else{
            $this->db->where($this->primary_key, $id);
            $this->db->update($this->_table,$data);
        }
        return true;
    }
    
    function get_contact($id = NULL){
        $this->db->where($this->primary_key,$id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    function deletecontact($id) {
        $this->db->where($this->primary_key,$id);
        $query = $this->db->delete($this->_table);
      
    }
  

}

?>