<?php
ob_start();
defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mbolos;

class Bolos extends CI_Controller {

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
		$this->load->model('Mbolos');
		$this->load->view('static/header.php');
		

		$select =  $this->input->post("bolos");

		//var_dump($select);die;

		if($select){
			if(($this->input->post("bolos") == "Todos")){
				$data['result2'] = $this->Mbolos->tipos();
				$data['result'] = $this->Mbolos->select();
				$_POST["bolos"] = "Todos";
				return ([$this->load->view('cards/cards_bolos.php', $data), $this->load->view('static/footer.php')]);
	
			}
			else {
				$data['result'] = $this->Mbolos->where($select);
				$data['result2'] = $this->Mbolos->tipos();
				//var_dump($data['result']);
				$_POST["bolos"] = $select;
				return ([$this->load->view('cards/cards_bolos.php', $data), $this->load->view('static/footer.php')]);
			}
		}
		
		// $url = $this->uri->segment(0);
		
		
		$this->load->view('static/footer.php');
		
	}

    public function cards_bolos()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mbolos');
		$this->load->view('static/header.php');
	

		$data = [
			'result2' => $this->Mbolos->tipos(),
			'result'  => $this->Mbolos->select(),
		];
	
		//var_dump($data['result2']);die;

		$this->load->view('cards/cards_bolos.php', $data);
		$this->load->view('static/footer.php');
	}
}