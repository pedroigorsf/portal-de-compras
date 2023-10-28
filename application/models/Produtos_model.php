<?php

class Produtos_model extends CI_Model {
    public function listar_produtos()
    {
        return $this->db->get("tb_produtos")->result_array();
    }

    public function cadastro($novo){
        $this->db->insert("tb_produtos", $novo);
    }
}