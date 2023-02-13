<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mespeciais;


class Especiais extends CI_Controller {
    public function filtro()
    {
		
    }

    public function cards_especiais()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mespeciais');

		$this->load->view('static/header.php');

		//$result2 = $this->Mespeciais->tipos();
		$data['result'] = $this->Mespeciais->select();

		$this->load->view('cards/cards_especiais.php', $data);

		$this->load->view('static/footer.php');
	}
}