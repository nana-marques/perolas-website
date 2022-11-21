<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
	{
		$this->load->helper('html');
		$this->load->view('static/header.php');
		$this->load->view('homepage');
		$this->load->view('static/footer.php');
	}

	
}