<?php
class Admin extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
    }
    function index()
    {
       $this->load->view('include/header');
       $this->load->view('admin/login_admin');
       $this->load->view('include/footer');
    }
    function login_verify()
    {
        $data=  $this->admin_model->credential();
        if($data)
        {
            /*$arr=array(
                'email'=>  $this->input->post('email'),
                'is_logged_in'=> TRUE
            );
            $d=$this->session->set_userdata($arr); */
            $this->load->view('include/header');
            $this->load->view('admin/admin_area');
            $this->load->view('include/footer');
        }
 else {
            $this->session->set_flashdata('msg','Email id or Password is wrong !!');
            //$this->index();
            redirect('admin/index');
 }
    }
}
