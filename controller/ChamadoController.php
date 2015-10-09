<?php

include_once "/model/Chamado.php";
include_once "/model/Local.php";
include_once "/model/Patrimonio.php";

class ChamadoController {

    private $chamado;
    
    public function __construct(Patrimonio $patrimonio, Solicitante $solicitante, Tecnico $tecnico, $descricao="") {
        $this->chamado = new Chamado($patrimonio, $solicitante, $tecnico, $descricao);
    }
    

    public function enviarChamado() {
        
    }

    public function atenderChamado() {
        
    }

    public function homologarChamado() {
        
    }

}
