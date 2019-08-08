<?php

class Usuario extends CI_CONTROLLER{

    function index(){
    }

    function novousuario(){
        $this->load->view('form_novousuario');
    }

    function novousuarioprivado(){
        $this->load->library('session');
        if ($this->session->logado) {
            $this->load->view('form_novousuario_privado');
        } else {
            redirect('login');
        }
    }

    function cadastrarusuario(){
        $this->load->database();
        $this->load->model('UsuarioModelo');
        $this->UsuarioModelo->email = $this->input->post('login');
        $this->UsuarioModelo->nome = $this->input->post('nome');
        $this->UsuarioModelo->senha = $this->input->post('senha');
        $this->db->select('email');
        $this->db->where('email', $this->input->post('login'));
        $retorno = $this->db->get('aluno')->num_rows();
        if($retorno>0){
            $this->data['tipo'] = "alert-danger";
            $this->data['titulo'] = "ERRO! ";
            $this->data['mensagem'] = "Este E-MAIL já está cadastrado.";
            $this->load->library('session');
            if ($this->session->logado) {
                $this->load->view('form_novousuario_privado', $this->data);
            } else {
                $this->load->view('form_novousuario', $this->data);
            }
        }else{
            $this->load->library('session');
            if ($this->session->logado) {
                $this->UsuarioModelo->gravar();
                $this->data['tipo'] = "alert-success";
                $this->data['titulo'] = "SUCESSO ";
                $this->data['mensagem'] = "Seu usuário foi cadastrado!";
                $this->load->view('form_novousuario_privado', $this->data);
            } else {
                $this->UsuarioModelo->gravar();
                redirect('login');
            }

        }
    }

    function listausuario(){
        $this->load->library('session');
        if ($this->session->logado) {
            $this->db->select('*');
            $dados['usuarios'] = $this->db->get('aluno')->result();
            $this->load->view('list_usuario', $dados);
        } else {
            redirect('login');
        }
    }
}
