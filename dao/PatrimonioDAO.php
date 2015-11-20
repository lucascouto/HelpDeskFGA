<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");

class PatrimonioDAO {
    
    private $conexao;
    
    public function __construct(){
		$this->conexao = new ConexaoBD();
	}
        
    public function inserirPatrimonio(Patrimonio $patrimonio){
		$sql = "INSERT INTO local (cod,descricao,marca)
                        VALUES (:cod, :descricao,:marca)";
                
        $preparar = $this->conexao->conectar()->prepare($sql);

        $preparar->bindValue(":cod", $patrimonio->getCodigo());
        $preparar->bindValue(":descricao", $patrimonio->getDescricao());
        $preparar->bindValue(":marca", $patrimonio->getMarca());
                           
		$resultado = $this->conexao->conectar()->Execute( $sql );
		return $resultado;
	}
        
    public function buscarPatrimonio($codigo){
        $sql = "SELECT * FROM patrimonio WHERE cod='$codigo'";
        $resultado = $this->conexao->conectar()->query($sql);
        $patrimonio = $resultado->fetch(PDO::FETCH_ASSOC);
        return $patrimonio;
    }
}