<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">

        <!-- Adicionando Folhas de Estilo CSS -->
        <link rel="stylesheet" type="text/css" href="../_css/w3.css">
        <link rel="stylesheet" type="text/css" href="../_css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../_css/layout_secundario.css">
        <link rel="stylesheet" type="text/css" href="../_css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="formChamado/layout_chamado.css">
        <link rel="stylesheet" type="text/css" href="formAlterarDados/layout_alterar_dados.css">
        <link rel="stylesheet" type="text/css" href="formMudarSenha/layout_mudar_senha.css">
        <link rel="stylesheet" type="text/css" href="css/layout_home.css">
        <link rel="stylesheet" type="text/css" href="../_css/layout_geral.css">

        <!-- Adicionando scripts JavaScript -->
        <script src="../_js/jquery-2.1.4.min.js"></script>
        <script src="JavaScript/home_scripts.js"></script>

        <title>HelpDesk FGA &bull; Home</title>
    </head>
    <body>
        <header class="w3-teal">
            <span class="fa fa-desktop fa-5x icone-computador"></span>
            <h1>HelpDesk <span id="fga-logo">FGA</span></h1>
            <div id="titulo-bemvindo">
                <span class="msg-bemvindo">Bem-Vindo, Fulano!</span>
                &nbsp;&nbsp;<span class="fa fa-bell-o"></span>
                <div id="sair-conta">
                    <a href="../../index.php">sair&nbsp;<span class="fa fa-sign-out"></span></a>
                </div>
            </div>

        </header>
        <section id="corpo-principal" class="w3-container">
            <div class="w3-card-2" id="card-chamado">
                <div class="w3-container w3-teal">
                    <span class="fa fa-commenting fa-3x icones"></span><h2>Realizar Chamado</h2>
                </div>
                <?php include_once './formChamado/form_chamado.html'; ?>
            </div>
            <div class="w3-card-2" id="card-acoes">
                <div class="w3-container w3-teal">
                    <span id="iconeAcao" class="fa fa-list fa-3x icones"></span><h2 id="titleAcoes">Ações</h2>
                </div>
                <div class="btnAcoes" id="btnAcoes">
                    <button class="w3-btn w3-teal w3-ripple btnAlterDados btnHistorico">Histórico<span class="fa fa-history iconsButtons"></span></button>
                    <button class="w3-btn w3-teal w3-ripple btnMensagens">Mensagens<span class="fa fa-envelope iconsButtons"></span></button>
                    <button class="w3-btn w3-green w3-ripple btnAlterSenha btnContato">Entrar em Contato<span class="fa fa-mail-forward iconsButtons"></span></button>
                </div>

                <div id="formContato">
                    <?php include_once './formContatoCPD/form_contato_cpd.html'; ?>
                    <button class="w3-btn w3-green w3-ripple cancelarMensagem">Cancelar</button>
                </div>
                <div id="caixa-mensagens">
                    <button class="w3-btn w3-teal botao-voltar-mensagens"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;Voltar</button>
                </div>
                <div id="card-historico">
                    <button class="w3-btn w3-teal btnVoltar"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;Voltar</button>
                </div>
            </div>
            <div class="w3-card-2" id="card-config-conta">
                <div class="w3-container w3-teal">
                    <span id="iconConfigConta" class="fa fa-cogs fa-3x icones"></span><h2 id="titleConfigConta">Configurar Conta</h2>
                </div>
                <div class="btnConfigConta" id="btnConfigConta">
                    <button class="w3-btn w3-teal w3-ripple btnAlterDados" id="btnAlterDados">Alterar Dados<span class="fa fa-cog iconsButtons"></span></button>
                    <button class="w3-btn w3-green w3-ripple btnAlterSenha btnChangePassword">Alterar Senha<span class="fa fa-key iconsButtons"></span></button>
                </div>
                <div id="formChangePassword">
                    <?php include_once './formMudarSenha/form_mudar_senha.html'; ?>
                    <button class="w3-btn w3-green cancelarSenha">Cancelar</button>
                </div>
                <div id="formAlterDados">
                    <?php include_once './formAlterarDados/form_alterar_dados.html'; ?>
                    <button class="w3-btn w3-green cancelAlterDados">Cancelar</button>
                </div>
            </div>
        </section>
        <footer id="rodape" style="margin-bottom">
            <span class="footerContent">sobre &nbsp; &bull; &nbsp; desenvolvedores &nbsp; &bull; &nbsp; 
                termos de serviço &nbsp; &bull; &nbsp; política de privacidade &nbsp; &bull; &nbsp;
                todos os direitos reservados &copy; 2015</span>
        </footer>	


    </body>
</html>
