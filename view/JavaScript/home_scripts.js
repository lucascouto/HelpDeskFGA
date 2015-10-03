$(document).ready(function(){
/**************************SCRIPTS PARA ENTRAR EM CONTATO***********************/
$(".btnContato").click(function(){
	$("#btnAcoes").fadeOut(5);
	$("#formContato").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Contato";
	document.getElementById("iconeAcao").className="fa fa-envelope icons fa-2x";
	document.getElementById("configurarConta").style.display = "none";
	$("#visualizarHistorico").animate({height:"530px"}, 250);
});
$(".cancelarMensagem").click(function(){
	$("#formContato").fadeOut(5);
	$("#btnAcoes").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Ações";
	document.getElementById("iconeAcao").className="fa fa-list icons fa-2x";
	document.getElementById("configurarConta").style.display = "block";
	document.getElementById("visualizarHistorico").style.height="250px";
});

/*****************************SCRIPTS PARA MUDAR DE SENHA********************************/
$(".btnChangePassword").click(function(){
	$("#btnConfigConta").fadeOut(5);
	$("#formChangePassword").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Alterar Senha";
	document.getElementById("iconConfigConta").className="fa fa-key icons fa-2x";
	document.getElementById("visualizarHistorico").style.display="none";
	document.getElementById("configurarConta").style.top="-480px";
	$("#configurarConta").animate({height:"400px"}, 220);
});

$(".cancelarSenha").click(function(){
	$("#formChangePassword").fadeOut(5);
	$("#btnConfigConta").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Configurar Conta";
	document.getElementById("iconConfigConta").className="fa fa-cogs icons fa-2x";
	document.getElementById("visualizarHistorico").style.display="block";
	document.getElementById("configurarConta").style.height="250px";
	document.getElementById("configurarConta").style.top="-200px";
});

/**************************SCRIPTS PARA ALTERAR OS DADOS*********************************/
$("#btnAlterDados").click(function(){
	$("#btnConfigConta").fadeOut(5);
	$("#formAlterDados").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Alterar Dados";
	document.getElementById("iconConfigConta").className="fa fa-user icons fa-2x";
	document.getElementById("visualizarHistorico").style.display="none";
	document.getElementById("configurarConta").style.top="-480px";
	$("#configurarConta").animate({height:"529px"}, 220);
});

$(".cancelAlterDados").click(function(){
	$("#formAlterDados").fadeOut(5);
	$("#btnConfigConta").fadeIn(220);
	
	document.getElementById("titleConfigConta").innerHTML = "Configurar Conta";
	document.getElementById("iconConfigConta").className="fa fa-cogs icons fa-2x";
	document.getElementById("visualizarHistorico").style.display="block";
	document.getElementById("configurarConta").style.height="250px";
	document.getElementById("configurarConta").style.top="-200px";
});

/**************************SCRIPTS PARA VISUALIZAR HISTÓRICO***************************/
$(".btnHistorico").click(function(){
	$("#btnAcoes").fadeOut(5);
	$("#historico").fadeIn(220);
	document.getElementById("titleAcoes").innerHTML = "Histórico";
	document.getElementById("iconeAcao").className="fa fa-history icons fa-2x";
	document.getElementById("formChamado").style.display="none";
	document.getElementById("configurarConta").style.display="none";
	document.getElementById("visualizarHistorico").style.marginTop="30px";
	document.getElementById("visualizarHistorico").style.marginRight="5%";
	$("#visualizarHistorico").animate({width:"90%", height: "550px"}, 500);
});	

$(".btnVoltar").click(function(){
	$("#historico").fadeOut(5);
	$("#btnAcoes").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Ações";
	document.getElementById("iconeAcao").className="fa fa-list icons fa-2x";
	document.getElementById("formChamado").style.display="block";
	document.getElementById("configurarConta").style.display="block";
	document.getElementById("visualizarHistorico").style.marginTop="-480px";
	document.getElementById("visualizarHistorico").style.marginRight="2%";
	document.getElementById("visualizarHistorico").style.width="32%";
	document.getElementById("visualizarHistorico").style.height="250px";
	

	
});	
});