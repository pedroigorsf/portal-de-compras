<?php

class Cotacoes_model extends CI_Model {

    public function fk_nome(){
        return $this->db->query("SELECT c.*, u.nome AS nome_usuario
        FROM tb_cotacoes AS c
        JOIN tb_usuarios AS u ON c.fk_solicitante = u.id");
    }
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

    public function show($id){
        return $this->db->get_where("tb_cotacoes", array("id" => $id))->row_array();
    }

    public function update($id, $cotacao){
        $this->db->where("id", $id);
        return $this->db->update("tb_cotacoes", $cotacao);
    }

    public function painel($id){
        return $this->db->get_where("tb_cotacoes", array("id" => $id))->row_array();
    }

    public function cotacao_fornecedor($id, $produto){
        $this->db->where("id", $id);
        return $this->db->update("tb_produtos", $produto);
    }
}