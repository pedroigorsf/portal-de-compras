<?php

class Fornecedores_model extends CI_Model {
    public function listar_fornecedor()
    {
        return $this->db->get("tb_fornecedores")->result_array();
    }

    public function cadastro($novo){
        $this->db->insert("tb_fornecedores", $novo);
    }

    public function show($id){
        return $this->db->get_where("tb_fornecedores", array("id" => $id))->row_array();
    }
}