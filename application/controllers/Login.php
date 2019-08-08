<?php

class Login extends CI_CONTROLLER{

    function index($mensagem=""){
        $dados['mensagem'] = $mensagem;
        $this->load->view('form_login', $dados);
    }

    function autenticar(){
        $login = $this->input->post('login');
        $senha = $this->input->post('senha');
        $this->load->database();
        $this->load->model('UsuarioModelo');
        $usuario = $this->UsuarioModelo->buscausuario( $login, $senha );
        if ($usuario){
            $this->load->library('session');
            $this->session->set_userdata('logado',true);
            $dados = array(
                'id' => $usuario->idusuario,
                'nome' => $usuario->nome,
                'email' => $usuario->email
            );
            $this->session->set_userdata($dados);
            redirect('privado');
        }else{
            $this->data['tipo'] = "alert-danger";
            $this->data['titulo'] = "ERRO! ";
            $this->data['mensagem'] = "Este E-MAIL e/ou SENHA não existe.";
            $this->load->view('form_login', $this->data);
            //$this->load->view('verif_login_incorreto');
        }
    }

    function deslogar(){
        $this->load->library('session');
        $this->session->sess_destroy();
        redirect('login');
    }

    function redirecionar(){
        redirect('login');
    }
}
