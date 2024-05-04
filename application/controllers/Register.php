<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('get_menu'));
        $this->load->model('Users');
    }

    public function index()
    {
        $home['home'] = home_url();
        $this->load->view('header');
        $this->load->view('register', $home);
    }

    public function create()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        $home['home'] = home_url();

        if (!$this->Users->create($data)) {
            $home['msg'] = 'error to register';
            $this->load->view('register', $data);
        }
        $home['msg'] = 'register sucessfully';
        $this->load->view('register', $home);
    }
}
