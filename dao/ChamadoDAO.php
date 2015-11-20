<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Chamado.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/SolicitanteController.php");

class ChamadoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function inserirChamado(Chamado $chamado) {
        $sql = "INSERT INTO chamado (descricao, cod_patrimonio, solicitante)
                        VALUES (:descricao, :cod_patrimonio , :solicitante)";

        
        $solicitante = new SolicitanteController();

        $preparar = $this->conexao->conectar()->prepare($sql);

        $preparar->bindValue(":descricao", $chamado->getDescricao());
        $preparar->bindValue(":cod_patrimonio", $chamado->getPatrimonio()->getCodigo());
        //$preparar->bindValue(":local", $chamado->getLocal());
        $preparar->bindValue(":solicitante", $solicitante->buscar($_COOKIE['nome_usuario'])->getMatricula());
        //$preparar->bindValue(":tecnico", $chamado->getTecnico());


        $resultado = $preparar->execute();
       
        return $resultado;
    }

}
