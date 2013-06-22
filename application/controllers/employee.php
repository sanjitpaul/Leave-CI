<?php
class Employee extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }
    function employee_area()
    {
        $this->load->view('include/header');
        $this->load->view('employee/employee_area');
        $this->load->view('include/footer');
       // $data['main_content']='employee_area';
        //$this->load->view('include/template',$data);
    }
    function is_logged_in()
    {
        $is_logged_in=  $this->session->userdata('is_logged_in');
        if((!isset($is_logged_in )) || ($is_logged_in!==true))
        {
            echo 'You do not have sufficient Permission to access !!';
            die(); 
        }
    }
    function logout()
    {
$this->session->unset_userdata($data);
redirect('login/index');
    }
}