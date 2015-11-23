<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/ChamadoDAO.php") ;

Class HistoricoGeralController implements Historico{
    
    public function listarChamados() {
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamados();
        
        return $chamados;
    }
    
    
}
