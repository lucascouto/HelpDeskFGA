<?php

class Chamado {

    private $descricao;
    
    public function __construct($local, $tecnico, $patrimonio, $descricao = "") {
        $this->descricao = $descricao;
        $this->local = $local;
        $this->tecnico = $tecnico;
        $this->patrimonio = $patrimonio;
    }

    public function inserirChamado($chamado);
    
    public function __setDescricao($descricao) {
        $this->descricao = $_POST['chamadoDescricao'];
    }

    public function __getDescricao() {
        return $this->descricao;
    }

}
