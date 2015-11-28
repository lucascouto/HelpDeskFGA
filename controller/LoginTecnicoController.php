<?php

include_once './dao/TecnicoDAO.php';
include_once './model/Tecnico.php';

class LoginTecnicoController {
    
    
    public function obterTecnico($username, $senha) {
        $loginTecnico = new TecnicoDAO();
        $tecnico = $loginTecnico->buscar($username);
         if ($tecnico != NULL) {
            $senhaTecnico = $tecnico['senha_tecnico'];

            if ($senha != $senhaTecnico) {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span></button>
                      <strong>Erro no login!</strong>Senha errada.</div>";
            } else {
                setcookie("nome_usuario", $username);
                setcookie("senha_usuario", $senha);
                setcookie("nome_completo", $tecnico['nome_tecnico']);
                header("Location: ./View/AdminView/home.php");
            }
        }
        return $tecnico;
        
    }
    
    
}