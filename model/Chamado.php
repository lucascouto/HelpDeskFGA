<?php

include_once "../../../model/Local.php";
include_once "../../../model/Patrimonio.php";
include_once "../../../model/Solicitante.php";
include_once "../../../model/Tecnico.php";
include_once "../../../dao/ChamadoDAO.php";
include_once '../../../controller/ChamadoController.php';

class Chamado {

    private $descricao;
    private $patrimonio;
    private $local;
    private $solicitante;
    private $tecnico;
    
    public function __construct(Patrimonio $patrimonio, Local $local, 
            Solicitante $solicitante, Tecnico $tecnico = NULL, $descricao = "")
    {
        $this->descricao = $descricao;
        $this->patrimonio = $patrimonio;
        $this->local = $local;
        $this->solicitante = $solicitante;
        $this->tecnico = $tecnico;
        
    }
    
    public function getSolicitante() {
        return $this->solicitante;
    }

    public function getTecnico() {
        return $this->tecnico;
    }

    public function setSolicitante(Solicitante $solicitante) {
        $this->solicitante = $solicitante;
    }

    public function setTecnico(Tecnico $tecnico) {
        $this->tecnico = $tecnico;
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

    function setPatrimonio(Patrimonio $patrimonio) {
        $this->patrimonio = $patrimonio;
    }

    function setLocal($local) {
        $this->local = $local;
    }


}