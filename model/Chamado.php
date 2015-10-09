<?php

class Chamado {

    private $descricao;
    
    public function __construct(Tecnico $tecnico, Patrimonio $patrimonio, $descricao = "") {
        $this->descricao = $descricao;
        $this->tecnico = $tecnico;
        $this->patrimonio = $patrimonio;
        $this->local = new Local;
    }

    public function inserirChamado($chamado);
    
    public function __setDescricao($descricao) {
        $this->descricao = $_POST['chamadoDescricao'];
    }

    public function __getDescricao() {
        return $this->descricao;
    }

}
