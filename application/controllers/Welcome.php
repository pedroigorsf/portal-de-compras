<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$data['usuario'] = permission();
		$this->load->view('templates/navbar', $data);
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/body');
		$this->load->view('templates/js');
		$this->load->view('templates/footer');
	}

}
