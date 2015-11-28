<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/conecta.class.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/TecnicoDAO.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/dao/AdministradorDAO.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/SolicitanteController.php");


$solicitante = new SolicitanteController();
$admin = new AdministradorDAO;
$tecnico = new TecnicoDAO;

if(isset($_COOKIE['nome_usuario'])){
    $nome_usuario = $_COOKIE['nome_usuario'];
}
if(isset($_COOKIE['senha_usuario'])){
    $senha_usuario = $_COOKIE['senha_usuario'];
}

if(!(empty($nome_usuario) or empty($senha_usuario))){
    $resultadoSolicitante = $solicitante->buscar($nome_usuario);
    $resultadoAdmin = $admin->buscar($nome_usuario);
    $resultadoTecnico = $tecnico->buscar($nome_usuario);
    
    /*if($resultadoSolicitante != NULL OR $resultadoAdmin != NULL OR $resultadoTecnico != NULL ){
        if($senha_usuario != $resultadoSolicitante->getSenha()){
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
    }*/
}
else{
    echo "Voce ainda nao efetuou o login!";
    exit();
}

