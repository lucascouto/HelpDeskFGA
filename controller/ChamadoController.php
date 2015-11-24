<?php


require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Chamado.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/ChamadoDAO.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/LocalDAO.php");
    
class ChamadoController {
    
    public function cadastrarChamado(Patrimonio $patrimonio, $sala, $edificio, 
            Solicitante $solicitante, $tecnico, $descricao = "")
    {     
        $localDAO = new LocalDAO;
        
        $buscaLocal = $localDAO->buscarLocal($edificio, $sala);
        $local = new Local($buscaLocal['id'],$buscaLocal['sala'],$buscaLocal['edificio']);
        
        $chamado = new Chamado($patrimonio, $local, $solicitante, $tecnico, $descricao);
        
        $dao = new ChamadoDAO();
        
        $resultado = $dao->inserirChamado($chamado);
        
        return $resultado;
        
    }
    
    public function cadastrarLocal($idLocal, $sala, $edificio){
        $localDAO = new LocalDAO;
        $local = new Local($idLocal, $sala, $edificio);
        $resultado = $localDAO->inserirLocal($local);
        return $resultado;
    }
}
