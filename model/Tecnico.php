<?php

include_once 'Usuario.php';

class Tecnico extends Usuario {

    function __construct($nome, $username, $senha, $matricula) {
        parent::__construct($nome, $username, $senha, $matricula);
    }

}
