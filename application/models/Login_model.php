<?php

class Login_model extends CI_Model
{
    public function auth_user($data)
    {

        $this->db->where('usuario', $data['usuario']);
        $this->db->where('senha', $data['senha']);
        $user = $this->db->get("tb_usuarios")->row_array();

        return $user;
    }

    public function auth_supplier($data)
    {
        $this->db->where('email', $data['usuario']);
        $this->db->where('senha', $data['senha']);
        return $this->db->get("tb_fornecedores")->row_array();


    }
}