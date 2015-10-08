<?php

include_once "/model/Chamado.php";
include_once "/model/Local.php";
include_once "/model/Patrimonio.php";

class ChamadoController {

    private $chamado;
    private $local;
    private $patrimonio;

    public function __construct() {
        $this->chamado = new Chamado;
        $this->local = new Local;
        $this->patrimonio = new patrimonio;
    }

    public function criarChamado() {
        $chamado->setDescricao = $_POST['chamadoDescricao'];
        $local->setEdificio = $_POST['edificio'];
        $local->setSala = $_POST['sala'];
        $patrimonio->nome = $_POST['nomePatrimonio'];
        $patrimonio->marca = $_POST['marcaPatrimonio'];
        $patrimonio->codigo = $_POST['codPatrimonio'];
        $patrimonio->tipo = $_POST['tipoPatrimonio'];
        
    }

    public function enviarChamado() {
        
    }

    public function atenderChamado() {
        
    }

    public function homologarChamado() {
        
    }

}
