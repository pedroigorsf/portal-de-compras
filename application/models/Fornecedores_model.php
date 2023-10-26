<?php

class Fornecedores_model extends CI_Model {
    public function listar_fornecedor()
    {
        return $this->db->get("tb_fornecedores")->result_array();
    }
}