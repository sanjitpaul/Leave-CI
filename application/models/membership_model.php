<?php
class Membership_model extends CI_Model{
    function create_member()
    {
        $new_member_insert_data=array(
            'fname' => $this->input->post('fname'),
            'lname' => $this->input->post('lname'),
            'contact' => $this->input->post('contact'),
            'email' => $this->input->post('email'),
            'dob' => $this->input->post('dob'),
            'user_name' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );
        $insert=$this->db->insert('employee',$new_member_insert_data);
        return $insert; 
    }
    function login_verify()
    {
        $this->db->where('user_name',$this->input->post('username'));
        $this->db->where('password', md5($this->input->post('password')));
        $this->db->where('status',0);
        $query = $this->db->get('employee');
       if($query->num_rows==1)
        {
           return TRUE;   
        } 
    }
    }
