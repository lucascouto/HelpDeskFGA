<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/ChamadoController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/SolicitanteController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Local.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");

if (isset($_POST['enviar'])) {
    $descricao = $_POST['descricaoChamado'];
    $nome = $_POST['nomePatrimonio'];
    $codigo = $_POST['codPatrimonio'];
    $tipo = $_POST['tipoPatrimonio'];
    $marca = $_POST['marcaPatrimonio'];
    $edificio = $_POST['edificio'];
    $sala = $_POST['sala'];
    $username = $_COOKIE['nome_usuario'];

    $patrimonio = new Patrimonio($nome, $codigo, $marca, $tipo);
    $local = new Local($sala, $edificio);
    $solicitanteControl = new SolicitanteController();
    $solicitante = $solicitanteControl->buscar($username);

    $chamado = new ChamadoController();
    $registrado = $chamado->cadastrarChamado($patrimonio, $local, $solicitante, NULL, $descricao);

    if ($registrado == TRUE) {
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Oba!</strong> Seu chamado foi enviado com sucesso ao CPD.
                </div>";
    } elseif ($registrado == FALSE) {
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Ah não...</strong> Seu chamado não pode ser enviado. Verifique as informações inseridas, ou entre em contato com o administrador.
                </div>";
    }
}