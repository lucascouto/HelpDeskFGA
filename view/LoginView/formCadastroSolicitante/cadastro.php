<?php

include_once '../../controller/CadastroController.php';

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $matricula = $_POST['txtMatricula'];
        $username = $_POST['txtUserName'];
        $vinculo = $_POST['vinculo'];
        $senha = $_POST['txtSenha'];
        
        if($_POST['vinculo'] == 'aluno'){
            $vinculo = 0;
        }
        elseif($_POST['vinculo'] == 'servidor'){
            $vinculo = 1;
        }
        
        $cadastro = new CadastroController();
        $cadastro->cadastrar($nome, $email, $matricula, $username, $vinculo, $senha);
        
    }
    
    