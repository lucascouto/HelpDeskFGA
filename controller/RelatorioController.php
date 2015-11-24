<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/HistoricoGeralController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/HistoricoTecnicoController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/HistoricoUsuarioController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/HistoricoController.php");

class RelatorioController {
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
    
    public function calculaChamados(){
        $dao = new ChamadoDAO; 
        $chamados = $dao->buscarChamados();
        
        $numeroChamados = count($chamados);
        
        return numeroChamados;  
    }
}


