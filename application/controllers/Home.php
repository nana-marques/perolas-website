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
		$this->load->model('Msalgados');
	}

	public function contato()
	{
		$this->load->helper('html');
		$this->load->helper('url');

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

			redirect($_SERVER['HTTP_REFERER']);
		} 
		else {
			$this->contato();
			//redirect(base_url('homepage'));
		}

		// var_dump($data);
	}

	public function about()
	{
		$this->load->view('static/header.php');
		$this->load->view('about');
		$this->load->view('static/footer.php');
	}

	public function personalizar()
	{
		$this->load->model('Msalgados');
		$this->load->model('Mdoces');

		$data['resultadoD'] = $this->Mdoces->select();
		$data['resultadoS'] = $this->Msalgados->select();
		
		$this->load->view('static/header.php');
		$this->load->view('personalizar', $data);
		$this->load->view('static/footer.php');
	}
}