<?php

Class HistoricoTecnicoController implements Historico{
    
    public function listarChamados(Tecnico $tecnico) {
        $dao = new ChamadoDAO; 
        $chamados[][] = $dao->buscarChamados();
        
        for ($i=1; $verificaChamado!=''; $i++){
            if ($tecnico == $chamados[n][0]) {
                $verificaChamado = $chamados[0][0];
                for ($j; $j<5; $j++){
                    $listaChamados[$i][$j] = $chamados[$i][$j];
                }
            }
        }
        
        return $listaChamados;
    }
    
}

