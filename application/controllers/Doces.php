<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Doces extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library([
            'encryption',
            'table',
            'form_validation',
            'pagination',
        ]);

		
	}

    public function filtrar()
    {
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mdoces');
		$this->load->view('static/header.php');
		

		$select =  $this->input->post("doces");
		
		$data['result'] = $this->Mdoces->where($select);
		$data['result2'] = $this->Mdoces->tipos();
		
		// $url = $this->uri->segment(0);
		
		$this->load->view('cards/cards_doces.php', $data);
		$this->load->view('static/footer.php');
    }

    public function cards_doces()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mdoces');

		$this->load->view('static/header.php');

		$data['result2'] = $this->Mdoces->tipos();
		$data['result'] = $this->Mdoces->select();

		$this->load->view('cards/cards_doces.php', $data);
		$this->load->view('static/footer.php');
	}
}