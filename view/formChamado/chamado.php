<?php

require_once '../../controller/ChamadoController.php';
require_once '../../model/Local';
require_once '../../model/Patrimonio';

if(isset($_POST['enviar'])){
        $descricao = $_POST['descricaoChamado'];
        $nome = $_POST['nomePatrimonio'];
        $codigo = $_POST['codPatrimonio'];
        $tipo = $_POST['tipoPatrimonio'];
        $marca = $_POST['marcaPatrimonio'];
        $edificio = $_POST['edificio'];
        $sala = $_POST['sala'];
        
        $patrimonio = new Patrimonio($nome, $codigo, $marca, $tipo);
        $local = new Local($sala, $edificio);
        $chamado = new ChamadoController($local, $patrimonio,$descricao);
}