<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HelpDesk FGA</title>
        <link href="stylesheets/layout.css" rel="stylesheet" type="text/stylesheet" />
        <link href="stylesheets/formulario.css" rel="stylesheet" type="text/stylesheet" />
        <script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="view/login/js/login.js"></script>
    </head>
    <body>
        <div id="topo">
            <img src="imagens/banner_helpdesk.jpg" align="center" height="115" width="985"/>
        </div>
        <div id="box">
            <div id="boxconteudo">
                <div id="paineldireito">
                    <h1 class="paineldireito">Login</h1>
                    <div id="boxlogin">
                        <form action="view/login/login.php" method="POST">
                            <fieldset>
                                <p align="center">
                                <label for="nomeLogin">Nome de usuário</label><br />
                                <input type="text" name="nomeLogin" size="28" class="campo" id="nomeLogin"/><br />
                                <label for="senhaSenha">Senha</label><br />
                                <input type="password" name="senhaLogin" size="28" class="campo" id="senhaLogin" /><br /><br /><br />
                                <input type="submit" value="ENTRAR" name="enviar" class="botaoCadastro botaoCadastro-blue" id="fecha-cadastro" onclick="limpaValidacaoCadastro();"/><br /><br /><br />
                                </p>
                            </fieldset>
                        </form>
                        <p align="center"><a href="recuperar_conta.php">Não consegue acessar a sua conta?</a></p>   
                    </div>
                </div>

                <div id="painelesquerdo">
                    <?php include "view/login/formCadastro.php"; ?>
                 
                    <div id="criarconta" class="hideCadastro">
                        <h1 class="painelesquerdo">Ainda não possui uma conta?</h1>
                        <button name="criarConta" id = "for-cadastro" class="botaoCadastro botaoCadastro-green">Clique aqui para Criar uma conta</button>
                    </div>
                    <div id="comofunciona" class="hideCadastro">
                        <h1 class="painelesquerdo">Como funciona o sistema de HelpDesk?</h1>

                        <img src="imagens/help.jpg" alt="help" class ="imagemDescricao" style="width: 20%; margin-top: 1%;"/>
                        <h3 style=" width: 86%;">Faça os seus chamados</h3>
                        <p class="itemDescricao">Você pode fazer chamados ao CPD para relatar problemas com os equipamentos da sala de aula e do laboratório</p><br />

                        <img src="imagens/consulta.png" alt="consulta" class ="imagemDescricao"/>
                        <h3 style=" width: 93%;">Consulte seus chamados</h3>
                        <p class="itemDescricao">É possivel ter acesso ao histórico de todos os seus chamados realizados</p><br />

                        <img src="imagens/notifica.png" alt="notifica" class ="imagemDescricao" />
                        <h3 style=" width: 89.8%;">Mantenha-se informado</h3>
                        <p class="itemDescricao">Sempre que um técnico do CPD ver o seu chamado, você será notificado</p><br />
                    </div>
                </div>    
            </div>
        </div>
    </body>
</html>
