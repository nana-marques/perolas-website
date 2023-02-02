<?php

defined('BASEPATH') OR exit('No direct script access allowed');

use application\models\Mespeciais;


class Especiais extends CI_Controller {
    public function filtro()
    {
		
    }

    public function cards()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('Mespeciais');

		$this->load->view('static/header.php');
		$this->load->view('cards/cards_especiais.php');
		$this->load->view('static/footer.php');
	}
}