<?php

include_once './dao/AdministradorDAO.php';

class LoginAdminController {
    
    
     public function obterAdmin($username, $senha) {
        $loginAdmin = new AdministradorDAO();
        $admin = $loginAdmin->buscar($username);
        if ($admin != NULL) {
            $senhaAdmin = $admin['senha_admin'];

            if ($senha != $senhaAdmin) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span></button>
                      <strong>Erro no login!</strong>Senha errada.</div>";
            } else {
                setcookie("nome_usuario", $username);
                setcookie("senha_usuario", $senha);
                setcookie("nome_completo", "Administrador");
                header("Location: ./View/AdminView/home.php");
            }
        }
        return $admin;
    }

    
    
}