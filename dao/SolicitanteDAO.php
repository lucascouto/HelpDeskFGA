<?php

include_once 'conecta.class.php';

class SolicitanteDAO {
    
    private $conexao;
       
    
    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function buscar($username) {
        $sql = "SELECT * FROM solicitante WHERE username_solicitante = '{$username}' ";
        
        $registro = $this->conexao->conectar()->query($sql);
        
        $resultado = $registro->fetch(PDO::FETCH_OBJ);
        
        
    
        return $resultado;
    }
    
    public function cadastrar(Solicitante $solicitante) {
        $nome = $solicitante->getNome();
        $email = $solicitante->getEmail();
        $matricula = $solicitante->getMatricula();
        $nomeUsuario = $solicitante->getUsername();
        $vinculoUnb = $solicitante->getVinculo();
        $senha = $solicitante->getSenha();
        
        $sql = "INSERT INTO solicitante (username_solicitante, nome_solicitante, "
                . "senha_solicitante, vinculo, matricula_solicitante)"
                . "VALUES ('{$nome}', '{$email}', '{$matricula}', '{$nomeUsuario}', '{$vinculoUnb}', '{$senha}')";
                
        $registro = $this->conexao->conectar()->query($sql);
        
        return $registro;
       
    }

}

