<?php

require_once './Controller/loginController.php';

if(isset($_POST['entrar'])){
    $username = $_POST['login'];
    $senha = $_POST['pass'];
    
    $login = new LoginController();
    
    $resultado = $login->obterUsuario($username, $senha);
   
   
    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
            <strong>Erro no login!</strong> {$resultado} 
          </div>";
    
}

