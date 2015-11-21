<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Solicitante.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Tecnico.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/SolicitanteDAO.php");

class CadastroController {
    
   

    public function cadastrar($nome, $email, $matricula, $username, $vinculo, $senha) {

        $solicitante = new Solicitante($nome, $email, $matricula, $username, $vinculo, $senha);
        
        $dao = new SolicitanteDAO();
        return $dao->cadastrar($solicitante);
        
    }
     
    public function buscarMatricula($matricula){
            $dao = new SolicitanteDAO();
            $solicitanteDAO = $dao->buscarMatricula($matricula);
            
            
            $nome = $solicitanteDAO['nome_solicitante'];
            $email = $solicitanteDAO['email_solicitante'];
            $username = $solicitanteDAO['username_solicitante'];
            $vinculo = $solicitanteDAO['vinculo'];
            $senha = $solicitanteDAO['senha_solicitante'];
            
            $solicitante = new Solicitante($nome, $email, $matricula, $username, $vinculo, $senha);
            return $solicitante;
               
    }
    
    public function excluirCadastro($matricula){
            $dao = new SolicitanteDAO();
            $status = $dao->excluirSolicitante($matricula);
            return $status;
               
    }
}