<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('get_menu', 'auth/login_rules'));
        $this->load->library(array('form_validation', 'session'));
        $this->load->model('Auth');
    }

    public function index()
    {
        $home['home'] = home_url();
        $this->load->view('header');
        $this->load->view('login', $home);
    }

    public function validate()
    {
        $home['home'] = home_url();

        $this->form_validation->set_error_delimiters('', '');
        $rules = getLoginRules();
        $this->form_validation->set_rules($rules);
        if ($this->form_validation->run() == FALSE) {
            $errors = array(
                'email' => form_error('email'),
                'password' => form_error('password')
            );
            echo json_encode($errors);
            $this->output->set_status_header(400);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if (!$res = $this->Auth->login($email, $password)) {
                echo json_encode(array('msg' => 'incorrent credentials'));
                $this->output->set_status_header(401);
                exit;
            }
            $data = array(
                'id' => $res->id,
                'name' => $res->name,
                'lastname' => $res->lastname,
                'state' => $res->state,
                'porfile' => $res->porfile,
                'is_logged' => TRUE,
            );
            $this->session->set_userdata($data);
            $this->session->set_flashdata('msg', 'Welcome ' . '' . $data['name']  . ' ' . $data['lastname']);
            echo json_encode(array('url' => base_url('dashboard')));
        }
    }

    public function logout()
    {
        $user = array(
            'id',
            'name',
            'lastname',
            'state',
            'porfile',
            'is_logged'
        );
        $this->session->unset_userdata($user);
        $this->session->sess_destroy();
        redirect('login');
    }
}
