<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Chamado.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/SolicitanteController.php");

class ChamadoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function inserirChamado(Chamado $chamado) {
        $sql = "INSERT INTO chamado (descricao, cod_patrimonio,local, solicitante)
                        VALUES (:descricao, :cod_patrimonio , :local, :solicitante)";

        
        $solicitante = new SolicitanteController();

        $preparar = $this->conexao->conectar()->prepare($sql);

        $preparar->bindValue(":descricao", $chamado->getDescricao());
        $preparar->bindValue(":cod_patrimonio", $chamado->getPatrimonio()->getCodigo());
        $preparar->bindValue(":local", $chamado->getLocal()->getId());
        $preparar->bindValue(":solicitante", $solicitante->buscar($_COOKIE['nome_usuario'])->getMatricula());
        //$preparar->bindValue(":tecnico", $chamado->getTecnico());


        $resultado = $preparar->execute();
       
        return $resultado;
    }
    
    public function buscarChamados(){
        $sql = "SELECT * FROM chamado";
        
        $resultado = $this->conexao->conectar()->query($sql);
        $chamados = $resultado->fetchAll();
        return $chamados;
    }
    
    public function buscarChamadosTecnico(Tecnico $tecnico){
        $sql = "SELECT * FROM chamado WHERE tecnico ='$tecnico' ";
        
        $resultado = $this->conexao->conectar()->query($sql);
        $chamados = $resultado->fetchAll();
        return $chamados;
    }
    
    public function buscarChamadosSolicitante(Solicitante $solicitante){
        $sql = "SELECT * FROM chamado WHERE solicitante = '$solicitante' ";
        
        $resultado = $this->conexao->conectar()->query($sql);
        $chamados = $resultado->fetchAll();
        return $chamados;
    }

}
