<?php

include_once 'Usuario.php';

class Tecnico extends Usuario {

    function __construct($nome, $email, $matricula,$username, $senha) {
        parent::__construct($nome, $email, $matricula,$username, $senha);
    }

}
