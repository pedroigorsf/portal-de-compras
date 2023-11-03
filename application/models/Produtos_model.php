<?php

class Produtos_model extends CI_Model {
    public function listar_produtos()
    {
        return $this->db->get("tb_produtos")->result_array();
    }

    public function listar_categorias()
    {
        return $this->db->get("tb_categorias")->result_array();
    }

    public function cadastro($novo){
        $this->db->insert("tb_produtos", $novo);
    }

    public function show($id){
        return $this->db->get_where("tb_produtos", array("id" => $id))->row_array();
    }

    public function update($id, $produto){
        $this->db->where("id", $id);
        return $this->db->update("tb_produtos", $produto);
    }

    public function destroy($id){
        $this->db->where("id", $id);
        return $this->db->delete("tb_produtos");
    }

    public function listar_produtos_cotacao($id)
    {
        return $this->db->query("
            SELECT produtos_cotacao.*, tb_produtos.*
            FROM produtos_cotacao
            JOIN tb_produtos ON produtos_cotacao.fk_produtos = tb_produtos.id
            WHERE produtos_cotacao.fk_cotacao = $id;
        ")->result_array();
    }




}