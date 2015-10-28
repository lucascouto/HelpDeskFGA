<?php

include_once '../../../controller/SolicitanteController.php';

$username = $_POST['txtUserName'];

$verifica_username = new SolicitanteController();
$existe_username = $verifica_username->buscarSolicitante($username);

if($existe_username == NULL){
    echo "false";
}else{
    echo "esse nome ja esta em uso";
}
    
