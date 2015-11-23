<?php

include_once 'conecta.class.php';

class TecnicoDAO {
    
    private $conexao;
       
    
    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function buscar($username) {
        $sql = "SELECT * FROM tecnico WHERE username_tecnico = '$username' ";
        $registro = $this->conexao->conectar()->query($sql);
        $resultado = $registro->fetch(PDO::FETCH_ASSOC);
       
        return $resultado;
    }
    
    public function buscarMatricula($matricula) {
        $sql = "SELECT * FROM tecnico WHERE matricula_tecnico = '$matricula' ";
        $resultado = $this->conexao->conectar()->query($sql);
        $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
       
        return $usuario;
    }
    
    public function cadastrar(Tecnico $tecnico) {
        
        $sql = "INSERT INTO tecnico (matricula_tecnico, nome_tecnico, "
                . "senha_tecnico, username_tecnico, email_tecnico)"
                . "VALUES (:matricula_tecnico, :nome_tecnico, :senha_tecnico"
                . ", :username_tecnico, :email_tecnico)";
        
        $preparar = $this->conexao->conectar()->prepare($sql);
        
        $preparar->bindValue(":username_tecnico", $tecnico->getUsername());
        $preparar->bindValue(":nome_tecnico", $tecnico->getNome());
        $preparar->bindValue(":senha_tecnico", $tecnico->getSenha());
        $preparar->bindValue(":matricula_tecnico", $tecnico->getMatricula());
        $preparar->bindValue(":email_tecnico", $tecnico->getEmail());
               
        $registro = $preparar->execute();
        
        return $registro;
    }
    
    public function excluirTecnico($matricula) {
        
        $sql = "DELETE FROM tecnico WHERE matricula_tecnico = '$matricula' ";
        
        $preparar = $this->conexao->conectar()->prepare($sql);
                    
        $registro = $preparar->execute();
        
        return $registro;
    }
}

