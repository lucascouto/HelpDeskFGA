$(document).ready(function(){
/**************************SCRIPTS PARA ENTRAR EM CONTATO***********************/
$(".btnContato").click(function(){
	$("#btnAcoes").fadeOut(5);
	$("#formContato").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Contato"
	document.getElementById("card-config-conta").style.display = "none";
	$("#card-acoes").animate({height:"530px"}, 250);
        document.getElementById("iconeAcao").className="fa fa-envelope fa-3x icones";
});
$(".cancelarMensagem").click(function(){
	$("#formContato").fadeOut(5);
	$("#btnAcoes").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Ações";
	document.getElementById("card-config-conta").style.display = "block";
	document.getElementById("card-acoes").style.height="250px";
        document.getElementById("iconeAcao").className="fa fa-list icones fa-3x";
});

/************************** SCRIPTS PARA ACESSAR AS MENSAGENS ******************************/
    $(".btnMensagens").click(function(){
        $("#btnAcoes").fadeOut(5);
        $("#caixa-mensagens").fadeIn(220);
	
        document.getElementById("titleAcoes").innerHTML = "Mensagens";
        document.getElementById("card-config-conta").style.display = "none";
        $("#card-acoes").animate({height:"530px"}, 250);
        document.getElementById("iconeAcao").className="fa fa-envelope fa-3x icones";
    });
    $(".botao-voltar-mensagens").click(function(){
        $("#caixa-mensagens").fadeOut(5);
	$("#btnAcoes").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Ações";
	document.getElementById("card-config-conta").style.display = "block";
	document.getElementById("card-acoes").style.height="250px";
        document.getElementById("iconeAcao").className="fa fa-list icones fa-3x";
    });

/*****************************SCRIPTS PARA MUDAR DE SENHA********************************/
$(".btnChangePassword").click(function(){
	$("#btnConfigConta").fadeOut(5);
	$("#formChangePassword").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Alterar Senha";
	document.getElementById("iconConfigConta").className="fa fa-key icones fa-3x";
	document.getElementById("card-acoes").style.display="none";
        $("#card-config-conta").animate({height:"400px", top: "-480px"}, 200);
});

$(".cancelarSenha").click(function(){
	$("#formChangePassword").fadeOut(5);
	$("#btnConfigConta").fadeIn(220);
        $("#card-acoes").fadeIn(400);
	
	document.getElementById("titleConfigConta").innerHTML = "Configurar Conta";
	document.getElementById("iconConfigConta").className="fa fa-cogs icones fa-3x";
        $("#card-config-conta").animate({height:"250px", top: "-200px"}, 100);
});

/**************************SCRIPTS PARA ALTERAR OS DADOS*********************************/
$("#btnAlterDados").click(function(){
	$("#btnConfigConta").fadeOut(5);
	$("#formAlterDados").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Alterar Dados";
	document.getElementById("iconConfigConta").className="fa fa-user icones fa-3x";
	document.getElementById("card-acoes").style.display="none";
	$("#card-config-conta").animate({height:"529px", top: "-480px"}, 200);
});

$(".cancelAlterDados").click(function(){
	$("#formAlterDados").fadeOut(5);
	$("#btnConfigConta").fadeIn(220);
        $("#card-acoes").fadeIn(400);
	
	document.getElementById("titleConfigConta").innerHTML = "Configurar Conta";
	document.getElementById("iconConfigConta").className="fa fa-cogs icones fa-3x";
        $("#card-config-conta").animate({height:"250px", top: "-200px"}, 100);
});

/**************************SCRIPTS PARA VISUALIZAR HISTÓRICO***************************/
$(".btnHistorico").click(function(){
	$("#btnAcoes").fadeOut(5);
	$("#card-historico").fadeIn(220);
	document.getElementById("titleAcoes").innerHTML = "Histórico";
	document.getElementById("iconeAcao").className="fa fa-history icones fa-3x";
	document.getElementById("card-chamado").style.display="none";
	document.getElementById("card-config-conta").style.display="none";
	document.getElementById("card-acoes").style.marginTop="30px";
	document.getElementById("card-acoes").style.marginRight="5%";
	$("#card-acoes").animate({width:"90%", height: "550px"}, 300);
});	

$(".btnVoltar").click(function(){
	$("#card-historico").fadeOut(5);
	$("#btnAcoes").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Ações";
	document.getElementById("iconeAcao").className="fa fa-list icones fa-3x";
	document.getElementById("card-chamado").style.display="block";
	document.getElementById("card-config-conta").style.display="block";
	document.getElementById("card-acoes").style.marginTop="-480px";
	document.getElementById("card-acoes").style.marginRight="2%";
	document.getElementById("card-acoes").style.width="32%";
	document.getElementById("card-acoes").style.height="250px";
	

	
});	
});