<?php

include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/PatrimonioController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/CadastroController.php");
include_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/model/Patrimonio.php");

$matricula = "";
$nome_busca = "";
$tipoUsuario = "";
$email_busca = "";

if (isset($_POST['cadastrarPatrimonio'])) {
       
    $codigo_patrimonio = $_POST['codPatrimonio'];
    $descricao_patrimonio = $_POST['nomePatrimonio'];
    $marca_patrimonio = $_POST['marcaPatrimonio'];
    
    $patrimonio = new PatrimonioController();
    $registrado = $patrimonio->cadastrarPatrimonio($descricao_patrimonio,$codigo_patrimonio,$marca_patrimonio);

    if ($registrado == TRUE) {
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Sucesso!</strong> Patrimônio cadastrado.
                </div>";
    } elseif ($registrado == FALSE) {
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Erro.</strong> Patrimônio não cadastrado.
                </div>";
    }
}

if (isset($_POST['buscarUsuario'])) {
    
    $matricula = $_POST['matricula_busca'];
    $cadastro = new CadastroController();
    $tipoUsuario = $_POST['tipo_usuario'];
    
    $usuario = $cadastro->buscarMatricula($matricula);
    
    $nome_busca = $usuario->getNome();
    $email_busca = $usuario->getEmail();
    
    if ($usuario->getUsername() == NULL){
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Erro.</strong> Usuário não encontrado.
                </div>";
    }else{
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Sucesso!</strong> O usuário foi encontrado.
                </div>";
        
    }
}

if (isset($_POST['excluirUsuario'])) {
    
    $matricula = $_POST['excluirMatricula'];
    $tipousuario = $_POST['tipousuario'];
    $cadastro = new CadastroController;
    $deletado = $cadastro->excluirCadastro($matricula, $tipousuario);

     if ($deletado == TRUE) {
        echo "<div class='alert alert-success alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Sucesso!</strong> Usuario excluido com sucesso.
                </div>";
    } elseif ($deletado == FALSE) {
        echo "<div class='alert alert-danger alert-dismissible feedback-login' role='alert'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                <strong>Erro.</strong> Usuário não excluído.
                </div>";
    }
}

if (isset($_POST['cadastroTecnico'])) {
    $nome = $_POST['txtName'];
    $email = $_POST['txtEmail'];
    $matricula = $_POST['txtMatricula'];
    $username = $_POST['txtUserName'];
    $senha = $_POST['txtSenha'];
    
$cadastro = new CadastroController();
$registrado = $cadastro->cadastrar($nome, $email, $matricula, $username, 0, $senha, 1);

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