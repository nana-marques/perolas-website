<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;
use application\models\Msalgados;


class Salgados extends CI_Controller {

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
		$this->load->model('Msalgados');
		$this->load->view('static/header.php');
		

		$select =  $this->input->post("salgados");
		
		$data['result'] = $this->Msalgados->where($select);
		$data['result2'] = $this->Msalgados->tipos();
		
		// $url = $this->uri->segment(0);
		
		$this->load->view('cards/cards_salgados.php', $data);
		$this->load->view('static/footer.php');
    }

    public function cards_salgados()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Msalgados');

		$this->load->view('static/header.php');

		$data['result2'] = $this->Msalgados->tipos();
		$data['result'] = $this->Msalgados->select();

		$this->load->view('cards/cards_salgados.php', $data);

		$this->load->view('static/footer.php');
	}
}