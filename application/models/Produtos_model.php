<?php

class Produtos_model extends CI_Model
{
    public function listar_produtos()
    {
        return $this->db->get("tb_produtos")->result_array();
    }

    public function listar_categorias()
    {
        return $this->db->get("tb_categorias")->result_array();
    }

    public function cadastro($data)
    {
        $this->db->insert("tb_produtos", $data);

        if ($this->db->affected_rows() >= 0){
            return true;
        } else {
            return false;
        }

    }

    public function show($id)
    {
        return $this->db->get_where("tb_produtos", array("id" => $id))->row_array();
    }

    public function update($id, $produto)
    {
        $this->db->where("id", $id);
        return $this->db->update("tb_produtos", $produto);
    }

    public function destroy($id)
    {
        return $this->db->query("UPDATE tb_produtos
                                 SET stats = 0
                                 WHERE id = $id");
        
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

    public function verificar_produto($data){
        
        $this->db->where("nome", $data['nome']);
        return $this->db->get("tb_produtos")->result_array();
        
    }




}