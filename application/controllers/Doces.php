<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Doces extends CI_Controller {
    public function filtro()
    {
		
    }

    public function cards_doces()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mdoces');

		$this->load->view('static/header.php');
		$data['result'] = $this->Mdoces->select();
		$this->load->view('cards/cards_doces.php', $data);
		$this->load->view('static/footer.php');
	}
}