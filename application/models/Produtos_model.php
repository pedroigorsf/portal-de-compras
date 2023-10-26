<?php

class Produtos_model extends CI_Model {
    public function listar_produtos()
    {
        return $this->db->get("tb_produtos")->result_array();
    }
}