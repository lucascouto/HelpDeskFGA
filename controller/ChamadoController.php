<?php


require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Chamado.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/ChamadoDAO.php");
    
class ChamadoController {
    
    public function cadastrarChamado(Patrimonio $patrimonio, Local $local, 
            Solicitante $solicitante, $tecnico, $descricao = "")
    {
        $chamado = new Chamado($patrimonio, $local, $solicitante, $tecnico, $descricao);
        
        $dao = new ChamadoDAO();
        
        $resultado = $dao->inserirChamado($chamado);
        
        return $resultado;
        
    }
}
