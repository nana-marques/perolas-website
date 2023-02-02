<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;
use application\models\Msalgados;


class Salgados extends CI_Controller {
    public function filtro()
    {
		
    }

    public function cards()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Msalgados');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_salgados.php');
		$this->load->view('static/footer.php');
	}
}