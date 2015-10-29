<?php

require_once '../../../controller/ChamadoController.php';
require_once '../../../model/Local.php';
require_once '../../../model/Patrimonio.php';

if(isset($_POST['enviar'])){
        $descricao = $_POST['descricaoChamado'];
        $nome = $_POST['nomePatrimonio'];
        $codigo = $_POST['codPatrimonio'];
        $tipo = $_POST['tipoPatrimonio'];
        $marca = $_POST['marcaPatrimonio'];
        $edificio = $_POST['edificio'];
        $sala = $_POST['sala'];
        $username = $_COOKIE['nome_solicitante'];
        
        $patrimonio = new Patrimonio($nome, $codigo, $marca, $tipo);
        $local = new Local($sala, $edificio);
        $solicitanteControl = new SolicitanteController();
        $solicitante = $solicitanteControl->buscar($username);
       
        $chamado = new ChamadoController();
        $chamado->cadastrarChamado($patrimonio, $local, $solicitante, $descricao);
        
}