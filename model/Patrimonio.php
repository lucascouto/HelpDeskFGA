<?php

class Patrimonio {

    private $descricao;
    private $codigo;
    private $marca;
   

    function __construct($descricao, $codigo, $marca) {
        $this->descricao = $descricao;
        $this->codigo = $codigo;
        $this->marca = $marca;
    }

        public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getMarca() {
        return $this->marca;
    }
}
