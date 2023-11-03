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
        return $this->db->query("SELECT nome FROM tb_usuarios WHERE tipo = 'aprovador' ")->row_array();
    }

    public function solicitantes()
    {
        return $this->db->query("SELECT nome FROM tb_usuarios WHERE tipo = 'solicitante' ")->row_array();
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

    public function cotacao_produto($id, $produto){
        $this->db->where("id", $id);
        return $this->db->update("tb_produtos", $produto);
    }

    public function cadastro_cotacao_produto($data){

        $prod = $data['fk_produtos'];
        
        $sql = "INSERT INTO produtos_cotacao (`fk_cotacao`, `fk_produtos`) VALUES ({$data['id']}, {$prod});";
        
        $this->db->query($sql);
        
    }
    
    public function cadastro_cotacao_fornecedor($id, $novo){

        $this->db->query("INSERT INTO fornecedores_cotacao (fk_cotacao_fornecedor, fk_fornecedor)
            VALUES ($id , $novo)
            ");
    }
}