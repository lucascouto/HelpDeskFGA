<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/PatrimonioDAO");


class PatrimonioController {
    
    public function buscarPatrimonio($codigo){
        $dao = new PatrimonioDAO();
        $patrimonio = $dao->buscarPatrimonio($codigo);
        
        return $patrimonio;
    }
}