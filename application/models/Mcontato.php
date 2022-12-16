<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcontato extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    //const TABLE_NAME = 'contato';

    public function adicionar($data) {
        return ($this->db->insert('contato', $data));
 
    }
}