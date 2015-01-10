<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_model extends CI_Model {
    
    public $_table      = 'region';
    public $primary_key = 'id';
  
    function __construct() {
        parent::__construct();
       
    }

    function list_content($num = NULL, $offset = NULL) {
    	    
        $query = $this->db->get($this->_table,$num,$offset);
        return $query->result();
    }
    
    function add_content($id = NULL,$image = NULL) {
    	$data  =   array(
    		'title'    => $this->input->post('name'),
    		'content'  => $this->input->post('content'),
    		'url'      => $this->input->post('url'),
    		'image'    => $image,
    	);
        if(empty($id)){
            $this->db->insert($this->_table,$data);
        }else{
            $this->db->where($this->primary_key, $id);
            $this->db->update($this->_table,$data);
        }
        return true;
    }
    
    function get_content($id = NULL){
        $this->db->where($this->primary_key,$id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    function deletecontent($id) {
        $this->db->where($this->primary_key,$id);
        $query = $this->db->delete($this->_table);
      
    }
  

}

?>