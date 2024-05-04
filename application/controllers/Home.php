<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('get_menu'));
	}

	public function index()
	{
		$data['menu'] = main_menu();
		$this->load->view('header');
		$this->load->view('home', $data);
	}
}
