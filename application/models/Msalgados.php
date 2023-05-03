<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msalgados extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    const TABLE_NAME = 'salgados';

    public function selectttt($data) {

        $query = $this->$db->table('salgados')->get();
        return ($query);
 
    }

    public function select($where = [], $limit = 100, $off_set = 0, $sortBy=null, $order=null) {

        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        $this->db->select(' salgados.id,
                            salgados.nome,
                            salgados.tipo,
                            salgados.descricao,
                            salgados.imagem,
                            salgados.preco');

        
        $this->db->order_by($sortBy, $order);
        $this->db->limit($limit, $off_set);        
        $retorno = $this->db->get(Msalgados::TABLE_NAME);
        
        return $retorno->result();
    }

    
    public function tipos() {

        $this->db->select('salgados.tipo')->distinct();
        
        $retorno = $this->db->get(Msalgados::TABLE_NAME);
        
        return $retorno->result();
    }

    public function where($where = []) {

        //$this->db->select('salgados.tipo');
        $this->db->where('salgados.tipo', $where);
        
        $retorno = $this->db->get(Msalgados::TABLE_NAME);
        
        return $retorno->result();
    }
}