<?php

Class HistoricoTecnicoController implements HistoricoController{
    
    public function listarChamados(Usuario $usuario) {
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamadosTecnico($tecnico);
        
        return $chamados;
    }
    
}

