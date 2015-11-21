<?php

include_once 'conecta.class.php';

class SolicitanteDAO {
    
    private $conexao;
       
    
    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function buscar($username) {
        $sql = "SELECT * FROM solicitante WHERE username_solicitante = '$username' ";
        $registro = $this->conexao->conectar()->query($sql);
        $resultado = $registro->fetch(PDO::FETCH_ASSOC);
       
        return $resultado;
    }
    
    public function buscarMatricula($matricula) {
        $sql = "SELECT * FROM solicitante WHERE matricula_solicitante = '$matricula' ";
        $resultado = $this->conexao->conectar()->query($sql);
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
       
        return $usuario;
    }
    
    public function cadastrar(Solicitante $solicitante) {
        
        $sql = "INSERT INTO solicitante (matricula_solicitante, username_solicitante, nome_solicitante, "
                . "senha_solicitante, vinculo,email_solicitante)"
                . "VALUES (:matricula_solicitante, :username_solicitante, :nome_solicitante, :senha_solicitante"
                . ", :vinculo, :email_solicitante)";
        
        $preparar = $this->conexao->conectar()->prepare($sql);
        
        $preparar->bindValue(":username_solicitante", $solicitante->getUsername());
        $preparar->bindValue(":nome_solicitante", $solicitante->getNome());
        $preparar->bindValue(":senha_solicitante", $solicitante->getSenha());
        $preparar->bindValue(":vinculo", $solicitante->getVinculo());
        $preparar->bindValue(":matricula_solicitante", $solicitante->getMatricula());
        $preparar->bindValue(":email_solicitante", $solicitante->getEmail());
               
        $registro = $preparar->execute();
        
        return $registro;
    }
    
    public function excluirSolicitante($matricula) {
        
        $sql = "DELETE FROM solicitante WHERE matricula_solicitante = '{$matricula}' ";
        
        $preparar = $this->conexao->conectar()->prepare($sql);
                    
        $registro = $preparar->execute();
        
        return $registro;
    }
}