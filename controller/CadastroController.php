<?php

include_once '../../model/Solicitante.php';
include_once '../../model/Tecnico.php';


class CadastroController {
    
   

    public function cadastrar($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha) {

        $solicitante = new Solicitante($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha);
        
        $dao = new SolicitanteDAO();
        $dao->cadastrar($solicitante);
        
    }
     

}

