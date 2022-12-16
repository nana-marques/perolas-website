<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use application\models\Mcontato;
class Home extends CI_Controller {

    public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->view('static/header.php');
		$this->load->view('homepage');
		//$this->load->view('contato');
		$this->load->view('static/footer.php');
	}

	public function card()
	{
		$this->load->helper('html');
		$this->load->helper('url');

		$this->load->view('static/header.php');
		//$this->load->view('cards');

        $query = $db->table('bolos')->get();

        foreach ($query->getResult() as $row) {
            echo $row->nome;
        }

		$this->load->view('static/footer.php');
	}
}