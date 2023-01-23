<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mcontato;

class Contato extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
       
        $this->load->library([
            'encryption',
            'table',
            'form_validation',
            'pagination',
        ]);

        $this->load->model('Mcontato');
    }

    public function index()
	{
		$this->load->view('static/header.php');
		$this->load->view('contato');
		$this->load->view('static/footer.php');
	}


	public function adicionar()
	{
		$this->load->library('form_validation');
		//$this->form_validation->set_rules();

		$this->form_validation->set_rules([  
			[
				'field' => 'nome',
				'db' => 'nome',
				'label' => 'nome',
				'rules' => 'required|trim'
			],
			[
				'field' => 'email',
				'db' => 'email',
				'label' => 'email',
				'rules' => 'required'
			],
			[
				'field' => 'descricao',
				'db' => 'descricao',
				'label' => 'descricao',
				'rules' => 'required|trim'
			],
		]);

		if ($this->form_validation->run()){
			$data = [
				'nome' => $this->input->post('nome'),
				'email' => $this->input->post('email'),
				'descricao' => $this->input->post('descricao'),
			];

			$this->load->model('Mcontato');
			$this->Mcontato->adicionar($data);
			//echo "hi";exit;
			return redirect()->to('homepage');
			
			//redirect()->("homepage/contato/enviar");
		} 
		else {
			redirect ("/");
		}

		// var_dump($data);
	}
	
}