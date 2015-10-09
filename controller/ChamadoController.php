<?php

include_once "../model/Chamado.php";
include_once "../model/Local.php";
include_once "../model/Patrimonio.php";

class ChamadoController {

    private $chamado;
    private $descricao;
    private $patrimonio;
            
    public function __construct(Patrimonio $patrimonio) {
        $descricao = $_POST['descricaoChamado'];
        $patrimonio->nome = $_POST['nomePatrimonio'];
        $patrimonio->codigo = $_POST['codPatrimonio'];
        $patrimonio->tipo = $_POST['tipoPatrimonio'];
        $patrimonio->marca = $_POST['marcaPatrimonio'];
        $this->chamado = new Chamado($patrimonio, $descricao);
        header();
    }

    public function enviarChamado() {
        
    }

    public function atenderChamado() {
        
    }

    public function homologarChamado() {
        
    }

}
