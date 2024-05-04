<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('get_menu'));
        $this->load->model('Users');
        $this->load->library(array('form_validation'));
    }

    public function index()
    {
        $home['home'] = home_url();
        $this->load->view('header');
        $this->load->view('register', $home);
    }

    public function create()
    {
        //data extracted from form

        $data = array(
            'name' => $this->input->post('name'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );

        //validations

        $config = array(
            array(
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|alpha',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'lastname',
                'label' => 'Last Name',
                'rules' => 'required|alpha',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),

            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|valid_email',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[8]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
            array(
                'field' => 'password-confirm',
                'label' => 'PasswordConfirmation',
                'rules' => 'required|min_length[8]',
                'errors' => array(
                    'required' => 'You must provide a %s.',
                ),
            ),
        );

        $this->form_validation->set_rules($config);

        if ($this->form_validation->run() == FALSE) {
            $home['home'] = home_url();
            $this->load->view('register', $home);
        } else {
            $home['home'] = home_url();

            //send data to model and create user

            if (!$this->Users->create($data)) {
                $home['msg'] = 'error to register';
                $this->load->view('register', $data);
            }
            $home['msg'] = 'register sucessfully';
            $this->load->view('register', $home);
        }
    }
}
