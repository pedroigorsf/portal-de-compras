<?php

class Cotacoes_model extends CI_Model {
    public function listar_cotacao()
    {
        return $this->db->get("tb_cotacoes")->result_array();
    }

    public function aprovadores()
    {
        return $this->db->query("SELECT nome FROM tb_usuarios WHERE tipo = 'aprovador' ")->result_array();
    }

    public function solicitantes()
    {
        return $this->db->query("SELECT nome FROM tb_usuarios WHERE tipo = 'solicitante' ")->result_array();
    }

    public function cadastro($novo){
        $this->db->insert("tb_cotacoes", $novo);
    }
}