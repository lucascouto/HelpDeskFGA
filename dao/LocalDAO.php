<?php

include_once "/model/Local";
include_once "/dao/conecta.class.php";

class LocalDAO {
    
    private $conexao;
    
    public function __construct( ){
		$this->conexao = new Conexao( );
	}
        
    public function inserirLocal(Local $local){
		$sql = "INSERT INTO local (sala,edificio)
                        VALUES ('{$local->__getSala( )}',"
                           . "'{$local->__getEdificio( )}' )";
                           
		$resultado = $this->conexao->conectar()->Execute( $sql );
		return $resultado;
	}
}