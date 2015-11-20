<?php

include_once './dao/SolicitanteDAO.php';
include_once './dao/AdministradorDAO.php';

class loginController {
    
    public function obterUsuario($username, $senha){
        try{
            $login = new SolicitanteDAO();
            $solicitante = $login->buscar($username);
            $loginAdmin = new AdministradorDAO();
            $admin = $loginAdmin->buscar($username);
            
            if(($solicitante == NULL) && ($admin == NULL)){
                return "Usuario nao encontrado.";
                
            }elseif ($solicitante == NULL) {
                unset ($_COOKIE['nome_usuario']);
                unset ($_COOKIE['senha_usuario']);
                setcookie("nome_completo", "Administrador");
                header("Location: ./View/AdminView/home.php");

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

