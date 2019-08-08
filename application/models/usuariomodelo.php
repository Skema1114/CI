<?php

class UsuarioModelo extends CI_Model{
    public $email;
    public $nome;
    public $senha;

    function gravar(){
        $this->db->insert('aluno',$this);
    }

    function buscausuario($email, $senha){
        $this->db->where('email', $email);
        $this->db->where('senha', $senha);
        return $this->db->get('aluno')->row();
    }
}
