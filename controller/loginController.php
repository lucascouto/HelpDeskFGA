<?php

include_once './dao/SolicitanteDAO.php';

class loginController {
    
    public function obterUsuario($username, $senha){
        try{
            $login = new SolicitanteDAO();
            $solicitante = $login->buscar($username);
            
            if($solicitante == NULL){
                return "Usuario nao encontrado.";
            }else{
               
                if($senha != $solicitante->senha_solicitante){
                    return "senha errada.";
                }
                else{
                    setcookie("nome_usuario", $username);
                    setcookie("senha_usuario", $senha);
                    setcookie("nome_completo", $solicitante->nome_solicitante);
                    header("Location: ./View/SolicitanteView/home.php");
                }
                
            }
        } catch (Exception $e) {

        }
    }
}

