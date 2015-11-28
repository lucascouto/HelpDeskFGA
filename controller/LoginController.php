<?php

require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/LoginTecnicoController.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/LoginSolicitanteController.php");
require_once ($_SERVER["DOCUMENT_ROOT"] . "/HelpDeskFGA/controller/LoginAdminController.php");


class loginController {

    public function obterUsuario($username, $senha) {
        $loginTecnico = new LoginTecnicoController;
        $tecnico = $loginTecnico->obterTecnico($username, $senha);
        
        $loginSolicitante = new LoginSolicitanteController;
        $solicitante = $loginSolicitante->obterSolicitante($username, $senha);
        
        $loginAdmin = new LoginAdminController;
        $admin = $loginAdmin->obterAdmin($username, $senha);
        
        if($solicitante == NULL AND $tecnico==NULL AND $admin==NULL){
            echo "<div class='alert alert-danger alert-dismissible' role='alert'>
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span></button>
                      <strong>Erro no login!</strong>Usuário não encontrado!</div>";
        }
        
    }    

}
