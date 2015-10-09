<?php

include_once '../../controller/CadastroController.php';

    if(isset($_POST['cadastrar'])) {
        $nomeCompleto = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $matricula = $_POST['txtMatricula'];
        $nomeUsuario = $_POST['txtUserName'];
        $vinculoUnb = $_POST['vinculo'];
        $senha = $_POST['txtSenha'];
        
        $cadastro = new CadastroController();
        $cadastro->cadastrar($nomeCompleto, $email, $matricula, $nomeUsuario, $vinculoUnb, $senha);
        
    }
    
    