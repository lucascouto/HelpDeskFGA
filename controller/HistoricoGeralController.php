<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/ChamadoDAO.php") ;
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/HistoricoController.php");


Class HistoricoGeralController implements HistoricoController{
    
    public function listarChamados(Usuario $usuario = NULL) {
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamados();
        
        return $chamados;
    }
    
    
}
