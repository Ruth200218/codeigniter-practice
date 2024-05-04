<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('get_menu'));
    }

    public function index()
    {
        $data['home'] = home_url();
        $this->load->view('header');
        $this->load->view('register', $data);
    }

    public function create()
    {
    }
}
