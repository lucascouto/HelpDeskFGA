<?php
    $nomeUsuario = $_POST['nomeUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $matriculaUsuario = $_POST['matriculaUsuario'];
    $loginUsuario = $_POST['loginUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    
    include_once '../../dao/conecta.class.php';
    
    $conn = new ConexaoBD();
    $inserir = $conn->conectar()->exec("INSERT INTO solicitante (username_solicitante, nome_solicitante, senha_solicitante, "
            . "matricula_solicitante) VALUES ('$loginUsuario', '$nomeUsuario', '$senhaUsuario', '$matriculaUsuario') ");
    
    header("Location: ../../index.php");
?>

