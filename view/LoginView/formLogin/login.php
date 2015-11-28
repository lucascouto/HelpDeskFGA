<?php

require_once './Controller/loginController.php';

if(isset($_POST['entrar'])){
    $username = $_POST['login'];
    $senha = $_POST['pass'];
    
    $login = new LoginController();
    
    $login->obterUsuario($username, $senha);
   
}

