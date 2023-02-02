<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Doces extends CI_Controller {
    public function filtro()
    {
		
    }

    public function cards()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mdoces');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_doces.php');
		$this->load->view('static/footer.php');
	}
}