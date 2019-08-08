<?php

class Veiculo extends CI_CONTROLLER{
    function index(){
        $this->load->helper('url');
    }

    function novoveiculo(){
        $this->load->library('session');
        if ($this->session->logado) {
            $this->load->view('form_novoveiculo');

        } else {
            redirect('login');
        }
    }

    function cadastrarveiculo(){
        $this->load->library('session');
        if ($this->session->logado) {
            $this->load->database();
            $this->load->model('VeiculoModelo');
            $this->VeiculoModelo->placa = $this->input->post('placa');
            $this->VeiculoModelo->marca = $this->input->post('marca');
            $this->VeiculoModelo->modelo = $this->input->post('modelo');
            $this->VeiculoModelo->ano = $this->input->post('ano');
            $this->VeiculoModelo->cor = $this->input->post('cor');
            $this->db->select('placa');
            $this->db->where('placa', $this->input->post('placa'));
            $retorno = $this->db->get('Carro')->num_rows();
            if($retorno>0){
                $this->data['tipo'] = "alert-danger";
                $this->data['titulo'] = "ERRO! ";
                $this->data['mensagem'] = "Esta PLACA já está cadastrada.";
                $this->load->view('form_novoveiculo', $this->data);
            } else {
                $this->VeiculoModelo->gravar();
                $this->data['tipo'] = "alert-success";
                $this->data['titulo'] = "SUCESSO ";
                $this->data['mensagem'] = "Seu veiculo foi cadastrado.";
                $this->load->view('form_novoveiculo', $this->data);
            }
        } else {
            redirect('login');
        }
    }

    function listaveiculo(){
        $this->load->library('session');
        if ($this->session->logado) {
            $this->db->select('*');
            $dados['veiculos'] = $this->db->get('carro')->result();
            $this->load->view('list_veiculo', $dados);
        } else {
            redirect('login');
        }
    }
}
