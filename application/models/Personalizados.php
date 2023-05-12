<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personalizados extends CI_Model{

    public function __construct() {
        parent::__construct();
    }

    //const TABLE_NAME = 'contato';

    public function adicionar($post) {
        //$insert = [$data['tamanho'], $data['massa'], $data['decoracao'], $data['docinho'], $data['quantidade']];
        //var_dump($insert);die;

        $data = [
            'tamanho-bolo'          => $post['tamanho'],
            'massa'                 => $post['massa'],
            'decoracao'             => $post['decoracao'],
            'adicionais'            => $post['adicional'],
            'docinho'               => $post['docinho'],
            'qtd-docinho'           => $post['quantidade'],
            'adicional-docinho'     => $post['adicionaldocinho'],
            'salgado'               => (isset($post['salgado'])? $post['salgado'] : NULL),
            'qtd-salgado'           => (isset($post['salgado'])? $post['quantidadesalgado'] : NULL),
            
        ];

        if (isset($post['docinhoadd'])){
            $postdocinhos[] = $post['docinhoadd1'] . " ; " . $post['quantidadedocinho1'] . " ; " . $post['adicionaldocinho1'];
            $array = json_decode(json_encode($postdocinhos),true);
            $docinhosformat = join(';', $array);
            $data .= [
                'docinho-add'           => (isset($post['docinhoadd1'])? $docinhosformat : NULL),
            ];
        }

        if (isset($post['salgadoadd'])){
            $postsalgados[] = $post['salgadoadd3'] . " ; " . $post['quantidadesalgado3'];
            $array2 = json_decode(json_encode($postsalgados),true);
            $salgadosformat = join(';', $array2);
            $data .= [
                'salgado-add'           => (isset($post['salgadoadd1'])? $salgadosformat : NULL),
            ];
        }

        //var_dump($data);die;
        $this->db->insert('personalizados', $data);
 
    }
}