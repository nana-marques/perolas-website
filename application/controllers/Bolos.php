<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Bolos extends CI_Controller {
    public function filtrar()
    {
		//colocar como if na view, 3 ifs e um else
		
		if($this->input->post("bolos")){

			$this->load->model('Mbolos');
	
			$select =  $this->input->post("bolos");
			$resultado = $this->Mbolos->where($select);
	
			$data = $resultado[0];
			//var_dump($result);die;
	
			$this->load->view('cards/cards_bolos.php', $data);
			//return ($result);
		}
    }

    public function cards_bolos()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mbolos');

		$this->load->view('static/header.php');

		$data['result2'] = $this->Mbolos->tipos();
		$data['result'] = $this->Mbolos->select();

		$this->load->view('cards/cards_bolos.php', $data);

		$this->load->view('static/footer.php');
	}
}