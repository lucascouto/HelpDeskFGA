<?php

Class HistoricoUsuarioController implements HistoricoController{
    
    public function listarChamados(Usuario $usuario) {
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamadosSolicitante($usuario);
        
        return $chamados;
    }
    
}


