<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('get_menu'));
    }

    public function index()
    {
        $home['home'] = home_url();
        $this->load->view('header');
        $this->load->view('login', $home);
    }
}
