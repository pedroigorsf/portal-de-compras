<?php

class Fornecedores_model extends CI_Model {
    public function listar_fornecedor()
    {
        return $this->db->get("tb_fornecedores")->result_array();
    }

    public function cadastro($novo){
        $this->db->insert("tb_fornecedores", $novo);
    }
}