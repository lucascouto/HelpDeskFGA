<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Solicitante.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Tecnico.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/SolicitanteDAO.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/TecnicoDAO.php") ;

class CadastroController {
    
   

    public function cadastrar($nome, $email, $matricula, $username, $vinculo, $senha, $tipoUsuario) {
        if ($tipoUsuario == 0) {
            $usuario = new Solicitante($nome, $email, $matricula, $username, $vinculo, $senha);
        
            $dao = new SolicitanteDAO();
        }
        
    else {
        $usuario = new Tecnico($nome, $email, $matricula, $username, $senha);
        
        $dao = new TecnicoDAO();
    }
        
        return $dao->cadastrar($usuario);
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
    
    public function excluirCadastro($matricula, $tipo){
           if ($tipo == 1){
                $dao = new SolicitanteDAO();
                $status = $dao->excluirSolicitante($matricula);
                return $status;
           }
            else {
                $dao = new TecnicoDAO();
                $status = $dao->excluirTecnico($matricula);
                return $status;
            }
           
            
               
    }
}