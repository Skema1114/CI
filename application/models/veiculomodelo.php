<?php

class VeiculoModelo extends CI_Model{
    public $placa;
    public $marca;
    public $modelo;
    public $ano;
    public $cor;

    function gravar(){
        $this->db->insert('Carro',$this);
    }
}
