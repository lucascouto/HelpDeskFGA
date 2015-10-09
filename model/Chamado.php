<?php

include_once "../model/Local.php";
include_once "../model/Patrimonio.php";
include_once "../dao/ChamadoDAO.php";
include_once '../controller/ChamadoController';

class Chamado {

    private $descricao;
    private $patrimonio;
    private $local;
    
    public function __construct(Patrimonio $patrimonio, $descricao = "") {
        $this->descricao = $descricao;
        $this->patrimonio = $patrimonio;
        $this->local = new Local;
        
    }
    
    function getDescricao() {
        return $this->descricao;
    }

    function getPatrimonio() {
        return $this->patrimonio;
    }

    function getLocal() {
        return $this->local;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setPatrimonio($patrimonio) {
        $this->patrimonio = $patrimonio;
    }

    function setLocal($local) {
        $this->local = $local;
    }


}
