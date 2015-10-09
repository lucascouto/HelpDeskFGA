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

}
