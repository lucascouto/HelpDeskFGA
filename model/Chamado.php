<?php

include_once "../model/Local.php";
include_once "../model/Patrimonio.php";
include_once "../dao/ChamadoDAO.php";

class Chamado {

    private $descricao;
    private $patrimonio;
    private $local;
    private $chamadoDAO;
    
    public function __construct(Patrimonio $patrimonio, $descricao = "") {
        $chamadoDAO = new ChamadoDAO;
        $chamadoDAO->inserirChamado($chamado);
        $this->descricao = $descricao;
        $this->patrimonio = $patrimonio;
        $this->local = new Local;
        
    }
    
    public function __setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function __getDescricao() {
        return $this->descricao;
    }

}
