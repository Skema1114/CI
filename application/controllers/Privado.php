<?php

class Privado extends CI_CONTROLLER{

    function index(){
        $this->load->library('session');
        if (  $this->session->logado ){
            $this->load->view('home_privado');
        }else{
            redirect('login');
        }
    }
}