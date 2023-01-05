<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Cards extends CI_Controller {

	public function cards_bolos()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mbolos');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_bolos.php');

		$result = $this->Mbolos->select();        

		$this->load->view('static/footer.php');
	}

	public function cards_doces()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mdoces');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_doces.php');

		$result = $this->Mdoces->select();        

		$this->load->view('static/footer.php');
	}

	public function cards_especiais()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mespeciais');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_especiais.php');

		$result = $this->Mespeciais->select();        

		$this->load->view('static/footer.php');
	}

	public function cards_salgados()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Msalgados');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_salgados.php');

		$result = $this->Msalgados->select();        

		$this->load->view('static/footer.php');
	}
}