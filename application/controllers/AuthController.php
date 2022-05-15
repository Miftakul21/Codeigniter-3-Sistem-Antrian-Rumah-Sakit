<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

	public function login()
	{
		$data['title'] = 'Sistem Antrian RM | Login';
		$this->load->view('template/auth/header',$data);
		$this->load->view('pages/auth/login');
		$this->load->view('template/auth/footer');
	}

	public function register()
	{
		$data['title'] = 'Sistem Antrian RM | Register';
		$this->load->view('template/auth/header',$data);
		$this->load->view('pages/auth/register');
		$this->load->view('template/auth/footer');
	}
}
