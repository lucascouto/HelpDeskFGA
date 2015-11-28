<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Solicitante.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Tecnico.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/ChamadoDAO.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/ChamadoController.php");


class Chamado {

    private $descricao;
    private $patrimonio;
    private $local;
    private $solicitante;
    private $tecnico;
    private $id;
    private $status;
        
    public function __construct(Patrimonio $patrimonio, Local $local, 
            Solicitante $solicitante, $tecnico, $descricao = "", $status = "1")
    {
        $this->descricao = $descricao;
        $this->patrimonio = $patrimonio;
        $this->local = $local;
        $this->solicitante = $solicitante;
        $this->tecnico = $tecnico;
        $this->id = $id;
        $this->status = $status;
        
    }
    
    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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