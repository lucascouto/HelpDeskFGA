<!doctype html>
<html>
    <head>
	<!-- Metadados -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width:device-width, initial-scale:1">
             
      	<!-- Adicionando Folhas de Estilo -->
        <link rel="stylesheet" type="text/css" href="view/CSS/w3.css">
        <link rel="stylesheet" type="text/css" href="view/CSS/bootstrap/bootstrap.min.css">    
        <link rel="stylesheet" href="view/CSS/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="view/CSS/layout_index.css">
        <link rel="stylesheet" type="text/css" href="view/CSS/layout_geral.css">
        
       	<!-- Adicionando scripts JavaScript -->
        <script src="view/JavaScript/jquery-2.1.4.min.js"></script>
        <script src="view/JavaScript/index-scripts.js"></script>
        
        <title>HepDesk FGA</title>
    </head>
    <body>
        <header class="w3-teal">
            <span class="fa fa-desktop fa-5x icone-computador" style="font-size:130px"></span>
            <h1>HelpDesk <span id="fga-logo">FGA</span></h1>
        </header>
        <div class="loginCard w3-card-24" id="cardLogin">
                <div class="w3-container w3-teal w3-padding-4">
                    <h2 id="loginTitle">Login</h2>
                </div>
                <div id="formLogin">
                    <?php include_once './view/formLogin/form_login.html'; ?>
                     <div id="createAccount">
                        <span class="lblCreateAccount">Criar Conta</span>               	
                        <span class="fa fa-angle-down btnCreateAccount" style="font-size: 38px"></span>
                     </div>
                </div> 
                <div id="formCadastro">
                    <?php include_once './view/formCadastroSolicitante/form_cadastro_solicitante.html'; ?>
                    <button class="btnCancelSubscribe w3-btn w3-green">Cancelar</button>
                </div> 
        </div> 
        <footer id="rodape">
            <span class="footerContent">sobre &nbsp; &bull; &nbsp; desenvolvedores &nbsp; &bull; &nbsp; 
                termos de serviço &nbsp; &bull; &nbsp; política de privacidade &nbsp; &bull; &nbsp;
                todos os direitos reservados &copy; 2015</span>
        </footer>	
    </body>
</html>