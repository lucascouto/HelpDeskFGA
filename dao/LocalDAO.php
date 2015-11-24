<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");

class LocalDAO {
    
    private $conexao;
    
    public function __construct( ){
		$this->conexao = new ConexaoBD( );
	}
        
    public function inserirLocal(Local $local){
                $sql = "INSERT INTO local (id, sala, edificio)
                        VALUES (:id, :sala , :edificio)";

            $preparar = $this->conexao->conectar()->prepare($sql);

            $preparar->bindValue(":id", $local->getId());
            $preparar->bindValue(":sala", $local->getSala());
            $preparar->bindValue(":edificio", $local->getEdificio());
                           
            $resultado = $preparar->execute();
            return $resultado;
	}
        
        public function buscarLocal($edificio, $sala){
            $sql = "SELECT * FROM local WHERE edificio = '$edificio' AND sala = '$sala'";
            
            $resultado = $this->conexao->conectar()->query($sql);
            $local = $resultado->fetch(PDO::FETCH_ASSOC);
            
            return $local;
        }
}