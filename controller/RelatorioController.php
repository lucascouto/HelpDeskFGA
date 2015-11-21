<?php

class Relatorio {
    private $strategy = NULL; 

    public function __construct($estrategia) {
        switch ($estrategia) {
            case "1": 
                $this->strategy = new HistoricoGeralController();
            break;
            case "2": 
                $this->strategy = new HistoricoTecnicoController();
            break;
            case "3": 
                $this->strategy = new HistoricoUsuarioController();
            break;
        }
    }
    public function mostrarHistorico() {
      return $this->strategy->listarChamados();
    }
    
    public function calculaUsuario(){
        return numeroUsuarios;  
    }
    
    public function calculaTecnico(){
        return numeroTecnico;  
    }
    
    public function calculaChamados(){
        return numeroChamados;  
    }
}


