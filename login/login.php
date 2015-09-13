<?php
    //obtem valores do form de login
     $nomeLogin = $_POST["nomeLogin"];
     $senhaLogin = $_POST["senhaLogin"];
     
     //acesso ao banco de dados
     include_once '../conecta.php';
     $resultado = mysql_query("SELECT * FROM solicitante WHERE username_solicitante='$nomeLogin'");
     $linhas = mysql_num_rows($resultado);
     if ($linhas == 0){
         echo "Nao foi encontrado o usuario";
     }else{
         $senha_retornada = mysql_result($resultado, 0, "senha_solicitante");
         if ($senhaLogin != $senha_retornada){
             echo "A senha esta incorreta";
         }
         else{
             setcookie("nome_login", $nomeLogin);
             setcookie("senha_login", $senhaLogin);
             
             header("Location: ../home.html");
         }
     }
     
     
?>

