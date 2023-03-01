<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mespeciais;


class Especiais extends CI_Controller {

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
		$this->load->model('Mespeciais');
		$this->load->view('static/header.php');
		

		$select =  $this->input->post("especiais");
		
		$data['result'] = $this->Mespeciais->where($select);
		$data['result2'] = $this->Mespeciais->tipos();
		
		// $url = $this->uri->segment(0);
		
		$this->load->view('cards/cards_especiais.php', $data);
		$this->load->view('static/footer.php');
    }

    public function cards_especiais()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mespeciais');

		$this->load->view('static/header.php');

		$data['result2'] = $this->Mespeciais->tipos();
		$data['result'] = $this->Mespeciais->select();

		$this->load->view('cards/cards_especiais.php', $data);

		$this->load->view('static/footer.php');
	}
}