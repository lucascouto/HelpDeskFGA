<?php

include_once "../model/Local";
include_once "../dao/conecta.class.php";

class PatrimonioDAO {
    
    private $conexao;
    
    public function __construct( ){
		$this->conexao = new ConexaoBD( );
	}
        
    public function inserirLocal(Patrimonio $patrimonio){
		$sql = "INSERT INTO local (nome,cod,marca,tipo)
                        VALUES ('{$patrimonio->__getNome( )}',"
                            . "'{$patrimonio->__getCodigo( )}',"
                           . "'{$patrimonio->__getMarca( )}',"
                           . "'{$patrimonio->__getTipo()}')";
                           
		$resultado = $this->conexao->conectar()->Execute( $sql );
		return $resultado;
	}
}