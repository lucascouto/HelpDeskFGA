<?php

include_once "../../../model/Chamado.php";
include_once "../../../dao/conecta.class.php";

class ChamadoDAO {

    private $conexao;

    public function __construct() {
        $this->conexao = new ConexaoBD();
    }

    public function inserirChamado(Chamado $chamado) {
        $sql = "INSERT INTO chamado (descricao, cod_patrimonio, local, solicitante, tecnico)
                        VALUES (:descricao, :cod_patrimonio, :local, :solicitante, :tecnico)";



        $preparar = $this->conexao->conectar()->prepare($sql);

        $preparar->bindValue(":descricao", $chamado->getDescricao());
        $preparar->bindValue(":cod_patrimonio", $chamado->getPatrimonio());
        $preparar->bindValue(":local", $chamado->getLocal());
        $preparar->bindValue(":solicitante", $chamado->getSolicitante());
        $preparar->bindValue(":tecnico", $chamado->getTecnico());


        $resultado = $preparar->execute();

        return $resultado;
    }

}
