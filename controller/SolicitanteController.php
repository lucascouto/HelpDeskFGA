<?php

include_once '/model/Solicitante.php';
include_once '../dao/SolicitanteDAO.php';

class SolicitanteController {
    
    
    public function buscar ($username){
        $dao = new SolicitanteDAO();
        $solicitanteDAO = $dao->buscar($username);
        $nome = $solicitanteDAO->nome_solicitante;
        $email = $solicitanteDAO->email_solicitante;
        $matricula = $solicitanteDAO->matricula_solicitante;
        $user = $solicitanteDAO->username_solicitante;
        $vinculo = $solicitanteDAO->vinculo;
        $senha = $solicitanteDAO->senha_solicitante;
        
        $solicitante = new Solicitante($nome, $email, $matricula, $user, $vinculo, $senha);
        
        return $solicitante;
    }
  
}
    
