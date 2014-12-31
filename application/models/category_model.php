<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {
    
    public $_table      = 'mailing_list_category';
    public $primary_key = 'id';
    public $foreign_key = 'category';
    public $_join_table = 'mailing_list';
    function __construct() {
        parent::__construct();
       
    }

    function list_category() {        
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    
    
    function add_category($id = NULL) {
        if(empty($id)){
            $this->db->insert($this->_table, array('name' => $this->input->post('title')));
        }else{
            $this->db->where($this->primary_key, $id);
            $this->db->update($this->_table, array('name' => $this->input->post('title')));
        }
        return true;
    }
    function get_category($id = NULL){
        $this->db->where($this->primary_key,$id);
        $query = $this->db->get($this->_table);
        return $query->result();
    }
    /*

    function view_blogs_category($blogs_category_id) {
        $this->db->where(array('blogs_category_id' => $blogs_category_id));
        $query = $this->db->get('blogs_category');
        return $query->result();
    }
    */
    function deletecategory($id) {
        $this->db->where($this->primary_key,$id);
        $query = $this->db->delete($this->_table);
        $this->db->where($this->foreign_key,$id);
        $query = $this->db->delete($this->_join_table);
    }
  

}

?>