<?php

class Local {

    private $edificio;
    private $sala;

    public function __construct($sala, $edificio) {
        $this->edificio = $edificio;
        $this->sala = $sala;
    }

    function getEdificio() {
        return $this->edificio;
    }

    function getSala() {
        return $this->sala;
    }

    function setEdificio($edificio) {
        $this->edificio = $edificio;
    }

    function setSala($sala) {
        $this->sala = $sala;
    }

}
