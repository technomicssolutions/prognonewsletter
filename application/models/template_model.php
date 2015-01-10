<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Template_model extends CI_Model {
    
    public $_table      = 'template';
    public $primary_key = 'id';
    function __construct() {
        parent::__construct();
       
    }

    function list_template($num = NULL, $offset = NULL) {
               
        $query = $this->db->get($this->_table,$num,$offset);
        return $query->result();
    }
    
    function add_template($id = NULL) {
        $data  =   array(
            'name'     =>  $this->input->post('name'),
            'header'   =>  $this->input->post('header'),
            'footer'   =>  $this->input->post('footer'),
            'content1' =>  $this->input->post('content1'),
            'content2' =>  $this->input->post('content2'),
            'content3' =>  $this->input->post('content3'),
            'content4' =>  $this->input->post('content4'),
        );
        if(empty($id)){
            $this->db->insert($this->_table,$data)
;        }else{
            $this->db->where($this->primary_key, $id);
            $this->db->update($this->_table,$data);
        }
        return true;
    }
    function get_template($id = NULL){
        $this->db->where($this->primary_key,$id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    function deletetemplate($id) {
        $this->db->where($this->primary_key,$id);
        $query = $this->db->delete($this->_table);
      
    }
  

}

?>