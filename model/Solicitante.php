<?php

include_once 'Usuario.php';
include_once '../../DAO/SolicitanteDAO.php';

class Solicitante extends Usuario{
    private $vinculo;
    
    function __construct($nome, $username, $email, $senha, $matricula, $vinculo) {
        parent::__construct($nome, $username, $email, $senha, $matricula);
        $this->vinculo = $vinculo;
        
        
    }
    
    function getVinculo() {
        return $this->vinculo;
    }

    function setVinculo($vinculo) {
        $this->vinculo = $vinculo;
    }
    
}

