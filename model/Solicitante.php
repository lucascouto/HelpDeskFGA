<?php

include_once 'Usuario.php';

class Solicitante extends Usuario{
    private $vinculo;
    
    function __construct($nome, $email, $matricula, $username, $vinculo, $senha) {
        parent::__construct($nome, $email, $matricula, $username, $senha);
        $this->vinculo = $vinculo;
        
        
    }
    
    function getVinculo() {
        return $this->vinculo;
    }

    function setVinculo($vinculo) {
        $this->vinculo = $vinculo;
    }
    
}

