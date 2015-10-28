<?php

include_once '../../model/Solicitante.php';
include_once '../../dao/SolicitanteDAO.php';

class SolicitanteController {
    
    private $solicitante;
    
    public function __construct() {
        $this->solicitante = new SolicitanteDAO();
    }


    public function alterarDados() {
        
    }
    
    public function excluirSolicitante() {
        
    }
    
    public function alterarSenha() {
        
    }
    
    public function buscarSolicitante($username){
        return $this->solicitante->buscar($username);
    }
  
}
    
