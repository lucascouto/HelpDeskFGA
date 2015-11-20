<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/PatrimonioController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");

if (isset($_POST['cadastrarPatrimonio'])) {
       
    $codigo_patrimonio = $_POST['codPatrimonio'];
    $descricao_patrimonio = $_POST['nomePatrimonio'];
    $marca_patrimonio = $_POST['marcaPatrimonio'];
    
    $patrimonio = new PatrimonioController();
    $registrado = $patrimonio->cadastrarPatrimonio($descricao_patrimonio,$codigo_patrimonio,$marca_patrimonio);

    if ($registrado == TRUE) {
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Sucesso!</strong> Patrimônio cadastrado.
                </div>";
    } elseif ($registrado == FALSE) {
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Erro.</strong> Patrimônio não cadastrado.
                </div>";
    }
}