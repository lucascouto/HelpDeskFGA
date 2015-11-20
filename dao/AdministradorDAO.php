<?php

include_once 'conecta.class.php';

class AdministradorDAO {
    
    private $conexao;
       
    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function buscar($username) {
        $sql = "SELECT * FROM administrador WHERE username_admin = '{$username}' ";
        $registro = $this->conexao->conectar()->query($sql);
        $resultado = $registro->fetch(PDO::FETCH_OBJ);
       
        return $resultado;
    }
}

