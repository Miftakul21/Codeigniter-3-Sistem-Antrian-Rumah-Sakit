<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function home()
    {
        $data['title'] = 'Home';
        $this->load->view('template/dashboard/header', $data);
        $this->load->view('pages/dashboard/home',);
        $this->load->view('template/dashboard/footer');
    }
}
