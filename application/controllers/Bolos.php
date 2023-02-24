<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;
use application\models\Mbolos;
use application\models\Mdoces;

class Bolos extends CI_Controller {
    public function filtrar()
    {
		//colocar como if na view, 3 ifs e um else
		
		$this->load->model('Mbolos');
		$resultado = $this->Mbolos->select();

		if(($this->input->post("bolos")) !== "Todos"){

			$select =  $this->input->post("bolos");
	
			//$result['resultado'] = $resultado;
			
			
			echo $this->input->post("bolos");

			//$resultado = json_decode( json_encode($resultado), true);
			
			//$resultado = $this->Mbolos->select();

			foreach($resultado as $row){
				echo $row->tipo;
			}
			var_dump($resultado);die;

			if(($resultado) === $select) {
				echo $resultado[2];
				var_dump($resultado);die;
				//return $this->load->view('cards/cards_bolos.php', $resultado);
			}
			
			
			
		}
		//var_dump($resultado);die;
		
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