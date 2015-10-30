<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/PatrimonioDAO");


class PatrimonioController {
    
    public function buscarPatrimonio($codigo){
        $dao = new PatrimonioDAO();
        $patrimonioDAO = $dao->buscarPatrimonio($codigo);
        
        $cod = $patrimonioDAO->codigo;
        $descricao = $patrimonioDAO->descricao;
        $marca = $patrimonioDAO->marca;
        
        $patrimonio = new Patrimonio($descricao, $cod, $marca);
        
        return $patrimonio;
    }
}