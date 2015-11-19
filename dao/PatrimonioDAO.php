<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");

class PatrimonioDAO {
    
    private $conexao;
    
    public function __construct(){
		$this->conexao = new ConexaoBD();
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
        
    public function buscarPatrimonio($codigo){
        $sql = "SELECT * FROM patrimonio WHERE cod='$codigo'";
        $resultado = $this->conexao->conectar()->query($sql);
        $patrimonio = $resultado->fetch(PDO::FETCH_OBJ);
        return $patrimonio;
    }
}