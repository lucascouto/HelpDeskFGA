<?php

include_once './dao/SolicitanteDAO.php';

class loginController {
    
    public function obterUsuario($username, $senha){
        try{
            $login = new SolicitanteDAO();
            $resultado = $login->buscar($username);
            
            if($resultado == NULL){
                return "Usuario nao encontrado.";
            }else{
               
                if($senha != $resultado->senha_solicitante){
                    return "senha errada.";
                }
                else{
                    setcookie("nome_usuario", $username);
                    setcookie("senha_usuario", $senha);
                    header("Location: ./View/SolicitanteView/home.php");
                }
                
            }
        } catch (Exception $e) {

        }
    }
}

