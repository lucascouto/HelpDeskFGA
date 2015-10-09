<?php

include_once '/model/Solicitante.php';
include_once '/model/Tecnico.php';


class CadastroController {
    
    private $solicitante;


    public function __cadastrar(Solicitante $solicitante) {
        $this->solicitante = new Solicitante($nomeCompleto, $matricula, $nomeUsuario, $vinculoUnb, $senha);
        
    }
     

}

