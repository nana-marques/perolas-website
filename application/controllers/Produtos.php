<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use application\models\Mcontato;

class Produtos extends CI_Controller {

    public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('static/header.php');
		$this->load->view('homepage');
		//$this->load->view('contato');
		$this->load->view('static/footer.php');
	}


	public function kit()
	{
		$this->load->view('static/header.php');
		$this->load->view('kit_festa.php');
		$this->load->view('static/footer.php');
	}

	public function personalizar(){
		if ($this->input->method() == 'post') {
            $post = $this->input->post(null, true);
			var_dump($post);die;
		}
	}
}