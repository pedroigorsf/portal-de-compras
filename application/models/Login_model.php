<?php

class Login_model extends CI_Model {
    public function auth($data){

        $this->db->where('usuario', $data['usuario']);
        $this->db->where('senha', $data['senha']);
        $user = $this->db->get("tb_usuarios")->row_array();

        return $user;
    }
}