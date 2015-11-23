<?php

include_once './controller/CadastroController.php';

if (isset($_POST['cadastrar'])) {
    $nome = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $matricula = $_POST['txtMatricula'];
    $username = $_POST['txtUserName'];
    $vinculo = $_POST['vinculo'];
    $senha = $_POST['txtSenha'];

    if ($_POST['vinculo'] == 'aluno') {
        $vinculo = 0;
    } elseif ($_POST['vinculo'] == 'servidor') {
        $vinculo = 1;
    }

    $cadastro = new CadastroController();
    $registrado = $cadastro->cadastrar($nome, $email, $matricula, $username, $vinculo, $senha, 0);

    if ($registrado == TRUE) {
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Sucesso!</strong> Cadastro efetuado com sucesso.
                </div>";
    }elseif ($registrado == FALSE){
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Oh não!</strong> Seu cadastro não pode ser efetuado. Verifique suas informações, ou entre em contato com o administrador.
                </div>";
    }
}

