<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdoces extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    const TABLE_NAME = 'doces';

    // public function selectttt($data) {
    //     $query = $this->$db->table('doces')->get();
    //     return ($query);
    // }

    public function select($where = [], $limit = 100, $off_set = 0, $sortBy=null, $order=null) {

        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        $this->db->select(' doces.id,
                            doces.nome,
                            doces.tipo,
                            doces.descricao');

        
        $this->db->order_by($sortBy, $order);
        $this->db->limit($limit, $off_set);        
        $retorno = $this->db->get(Mdoces::TABLE_NAME);
        
        return $retorno->result();
    }

    
    public function tipos() {

        $this->db->select('doces.tipo')->distinct();
        
        $retorno = $this->db->get(Mdoces::TABLE_NAME);
        
        return $retorno->result();
    }

    public function where($where = []) {

        //$this->db->select('doces.tipo');
        $this->db->where('doces.tipo', $where);
        
        $retorno = $this->db->get(Mdoces::TABLE_NAME);
        
        return $retorno->result();
    }
}