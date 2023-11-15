<?php

class Fornecedores_model extends CI_Model
{
    public function listar_fornecedor()
    {
        return $this->db->get("tb_fornecedores")->result_array();
    }

    public function cadastro($novo)
    {
        $this->db->insert("tb_fornecedores", $novo);
    }

    public function show($id)
    {
        return $this->db->get_where("tb_fornecedores", array("id" => $id))->row_array();
    }

    public function cotacao($id)
    {
        return $this->db->query("SELECT *
        FROM tb_fornecedores_cotacao AS cotacao
        JOIN tb_fornecedores AS fornecedor ON cotacao.fk_tb_fornecedor = fornecedor.id
        WHERE fornecedor.id = $id");
    }

    public function update($id, $fornecedor)
    {
        $this->db->where("id", $id);
        return $this->db->update("tb_fornecedores", $fornecedor);
    }

    public function destroy($id)
    {
        $this->db->where("id", $id);
        return $this->db->delete("tb_fornecedores");
    }

    public function listar_fornecedor_cotacao($id)
    {
        return $this->db->query("
            SELECT fornecedores_cotacao.*, tb_fornecedores.*
            FROM fornecedores_cotacao
            JOIN tb_fornecedores ON fornecedores_cotacao.fk_fornecedor = tb_fornecedores.id
            WHERE fornecedores_cotacao.fk_cotacao_fornecedor = $id;
        ")->result_array();
    }

    public function verificar_fornecedor($data){
        
        $this->db->where("cnpj", $data['cnpj']);
        return $this->db->get("tb_fornecedores")->result_array();
        
    }

}