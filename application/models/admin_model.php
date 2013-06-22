<?php
class Admin_model extends CI_Model{
    function credential()
    {
         $this->db->where('email',  $this->input->post('email'));
         $this->db->where('password', md5($this->input->post('password')));
         $query=  $this->db->get('admin');
         if($query->num_rows==1)
        {
           return TRUE;   
        } 
    }
}