<?php

include_once "../model/Chamado.php";
include_once "../model/Local.php";
include_once "../model/Patrimonio.php";
include_once "../dao/ChamadoDAO.php";

class ChamadoController {

    private $chamado;
    private $descricao;
    private $patrimonioDAO;
    private $chamadoDAO;
            
    public function __construct(Local $local, Patrimonio $patrimonio,$descricao){
        
        $this->local = new LocalDAO($local);
        $this->patrimonio = new PatrimonioDAO($patrimonio);
        $this->chamado = new Chamado($local,$patrimonio, $descricao);
        $this->chamadoDAO = new ChamadoDAO;
        $chamadoDAO->inserirChamado($chamado);
        header("Location: ../home.html");
    }
}
