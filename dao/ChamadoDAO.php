<?php

include_once "../model/Chamado.php";
include_once "../dao/conecta.class.php";

class ChamadoDAO {
    
    private $conexao;
    
    public function __construct( ){
		$this->conexao = new ConexaoBD( );
	}
        
    public function inserirChamado(Chamado $chamado){
		$sql = "INSERT INTO chamado (local,descricao,patrimonio)
                        VALUES ('{$chamado->__getLocal( )}',"
                           . "'{$chamado->__getDescricao( )}',"
                           . "'{$chamado->__getPatrimonio( )}' )";
                           
		$resultado = $this->conexao->conectar()->Execute( $sql );
		return $resultado;
	}
}