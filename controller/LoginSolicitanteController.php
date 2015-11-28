<?php

include_once './dao/SolicitanteDAO.php';
include_once './model/Solicitante.php';

class LoginSolicitanteController {
    
    
    public function obterSolicitante($username, $senha) {
        $login = new SolicitanteDAO();
        $solicitante = $login->buscar($username);
        if ($solicitante != NULL) {
            $senhaSolicitante = $solicitante['senha_solicitante'];
            
            if ($senha != $senhaSolicitante) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span></button>
                      <strong>Erro no login!</strong>Senha errada.</div>";
            } else {
                setcookie("nome_usuario", $username);
                setcookie("senha_usuario", $senha);
                setcookie("nome_completo", $solicitante['nome_solicitante']);
                header("Location: ./View/SolicitanteView/home.php");
            }
        }
        return $solicitante;
    }
    
    
}