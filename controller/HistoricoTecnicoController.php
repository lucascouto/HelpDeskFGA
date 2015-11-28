<?php

Class HistoricoTecnicoController implements HistoricoController{
    
    public function listarChamados(Usuario $usuario) {
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamadosTecnico($usuario);
        
        return $chamados;
    }
    
}

