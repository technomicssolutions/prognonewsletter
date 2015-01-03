<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact_model extends CI_Model {
    
    public $_table      = 'mailing_list';
    public $primary_key = 'id';
    public $foreign_key = 'category';
    public $_join_table = 'mailing_list_category';
    function __construct() {
        parent::__construct();
       
    }

    function list_contact() {        
        $this->db->join($this->_join_table, $this->_join_table.'.'.$this->primary_key.'='.$this->_table.'.'.$this->foreign_key);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    function add_contact($id = NULL) {
    	$data  =   array(
    		'category' => $this->input->post('category'),
    		'email'    => $this->input->post('email'),
    		'name'     => $this->input->post('name'),
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