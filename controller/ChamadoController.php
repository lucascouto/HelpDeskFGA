<?php

include_once '../../../model/Chamado.php';
include_once '../../../model/Local.php';
include_once '../../../model/Patrimonio.php';
include_once '../../../dao/ChamadoDAO.php';

class ChamadoController {
    
    public function cadastrarChamado(Patrimonio $patrimonio, Local $local, 
            Solicitante $solicitante, Tecnico $tecnico, $descricao = "")
    {
        $chamado = new Chamado($patrimonio, $local, $solicitante, $tecnico, $descricao);
        
        $dao = new ChamadoDAO();
        
        $dao->inserirChamado($chamado);
        
    }
}
