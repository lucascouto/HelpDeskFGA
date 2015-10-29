<?php
include_once '../../dao/conecta.class.php';
include_once '../../controller/SolicitanteController.php';

$solicitante = new SolicitanteController();

if(isset($_COOKIE['nome_usuario'])){
    $nome_usuario = $_COOKIE['nome_usuario'];
}
if(isset($_COOKIE['senha_usuario'])){
    $senha_usuario = $_COOKIE['senha_usuario'];
}

if(!(empty($nome_usuario) or empty($senha_usuario))){
    $resultado = $solicitante->buscar($nome_usuario);
    if($resultado != NULL){
        if($senha_usuario != $resultado->getSenha()){
            setcookie('nome_usuario', '', time()-3600);
            setcookie('senha_usuario', '', time()-3600);
            echo "Voce ainda nao efetuou o login!";
            exit();
        }
    }
    else{
        setcookie('nome_usuario', '', time()-3600);
        setcookie('senha_usuario', '', time()-3600);
        echo "Voce ainda nao efetuou o login!";
        exit();
    }
}
else{
    echo "Voce ainda nao efetuou o login!";
    exit();
}

