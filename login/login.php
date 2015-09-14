<?php
    //obtem valores do form de login
     $nomeLogin = $_POST["nomeLogin"];
     $senhaLogin = $_POST["senhaLogin"];
     
     //acesso ao banco de dados
     include_once '../conecta.class.php';
     $conecta = new ConexaoBD();
     $resultado = $conecta->conectar()->prepare("SELECT * FROM solicitante WHERE username_solicitante='$nomeLogin'");
     $resultado->execute();
     $linhas = $resultado->rowCount();
     if ($linhas == 0){
         echo "Nao foi encontrado o usuario";
     }else{
         foreach ($resultado as $row){
            $senha_retornada = $row["senha_solicitante"];
         }
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

