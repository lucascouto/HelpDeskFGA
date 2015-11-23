<?php

class Local {

    private $edificio;
    private $sala;
    private $id;

    public function __construct($id, $sala, $edificio) {
        $this->edificio = $edificio;
        $this->sala = $sala;
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
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
