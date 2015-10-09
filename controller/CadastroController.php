<?php

include_once '../../model/Solicitante.php';
include_once '../../model/Tecnico.php';
include_once '../../dao/SolicitanteDAO.php';


class CadastroController {
    
   

    public function cadastrar($nome, $email, $matricula, $username, $vinculo, $senha) {

        $solicitante = new Solicitante($nome, $email, $matricula, $username, $vinculo, $senha);
        
        $dao = new SolicitanteDAO();
        $dao->cadastrar($solicitante);
        
    }
     

}

