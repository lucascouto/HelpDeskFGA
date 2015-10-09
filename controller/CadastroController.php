<?php

include_once '/model/Solicitante.php';
include_once '/model/Tecnico.php';


class CadastroController {
    
    private $solicitante;

    public function cadastrar($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha) {

        $this->solicitante = new Solicitante($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha);
        $solicitante = new ConexaoBD();
    }
     

}

