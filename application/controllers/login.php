<?php
class Login extends CI_Controller{
    function index()
    {
        $this->load->view('include/header');
        $this->load->view('employee/login_form');
        $this->load->view('include/footer');
    }
    function signup()
    {
        $this->load->view('include/header');
        $this->load->view('employee/signup_form');
        $this->load->view('include/footer');
    }
    function create_member()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('contact','Contact No.','required');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('username','User Name','trim|required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password','Password','trim|required|matches[passconf]');
        $this->form_validation->set_rules('passconf','Password Confirmation','trim|required');
        if ($this->form_validation->run()==FALSE)
        {
            $this->signup();  
        }
 else {
            $this->load->model('membership_model');
            $query=$this->membership_model->create_member();
            if($query)
            {
                //$data['main_content']='signup_successful';
                //$this->load->view('include/template',$data); 
                 //$this->session->set_flashdata('item', 'value');
                //$this->session->flashdata('msg');
                redirect('login/index?msg=success');
            }
 else {
      $this->signup();
 }   
 }    
    } 
    function credentials()
    {
      $this->load->model('membership_model');
      $q=$this->membership_model->login_verify();
        if($q)
        {
            $data=array(
                'user_name'=>  $this->input->post('username'),
                'is_logged_in'=>true
            );
           $this->session->set_userdata($data);
           redirect('employee/employee_area');
        }
 else {
          $this->session->set_flashdata('message', 'User name or Password is wrong !!');
           redirect('login/index');
 }
    }
}