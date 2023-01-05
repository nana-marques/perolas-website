<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mespeciais extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    const TABLE_NAME = 'especiais';

    // public function selectttt($data) {
    //     $query = $this->$db->table('especiais')->get();
    //     return ($query);
    // }

    public function select($where = [], $limit = 100, $off_set = 0, $sortBy=null, $order=null) {

        if ($where) {
            foreach ($where as $key => $value) {
                $this->db->where($key, $value);
            }
        }

        $this->db->select('especiais.nome,
                            especiais.tipo,
                            especiais.categoria');

        
        $this->db->order_by($sortBy, $order);
        $this->db->limit($limit, $off_set);        
        $retorno = $this->db->get(Mespeciais::TABLE_NAME);
        
        return $retorno->result();
    }
}