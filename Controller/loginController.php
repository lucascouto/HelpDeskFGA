<?php

include_once '../../DAO/SolicitanteDAO.php';

class loginController {
    
    public function obterUsuario($username, $senha){
        try{
            $login = new SolicitanteDAO();
            $resultado = $login->buscar($username);
            
            if($resultado == NULL){
                echo "Usuario nao encontrado!";
            }else{
               
                if($senha != $resultado->senha_solicitante){
                    echo "senha errada!";
                }
                else{
                    setcookie("nome_usuario", $username);
                    setcookie("senha_usuario", $senha);
                    header("Location: ../home.html");
                }
                
            }
        } catch (Exception $e) {

        }
    }
}
