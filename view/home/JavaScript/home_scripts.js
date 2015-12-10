$(document).ready(function(){
/**************************SCRIPTS PARA VISUALIZAR HISTORICO TECNICO***************************/
$("#btn-historico-tecnico").click(function(){
	$("#btn-historico-tecnico").fadeOut(5);
        $("#btn-historico-solicitante").fadeOut(5);
        $("#relatorio-historico").fadeOut(5);
	$("#card-historico-tecnico").fadeIn(220);
        $("#btn-voltar-tecnico").fadeIn(220);
        
	document.getElementById("titleAcoes").innerHTML = "Histórico de Técnico";
	document.getElementById("iconeAcao").className="fa fa-history icones fa-3x";
	document.getElementById("card-principal").style.display="none";
	document.getElementById("card-secundario").style.marginTop="30px";
	document.getElementById("card-secundario").style.marginRight="5%";
	$("#card-secundario").animate({width:"90%", height: "550px"}, 300);
});	

$("#btn-voltar-tecnico").click(function(){
	$("#card-historico-tecnico").fadeOut(5);
        $("#btn-voltar-tecnico").fadeOut(5);
        $("#relatorio-historico").fadeIn(220);
	$("#btn-historico-tecnico").fadeIn(220);
        $("#btn-historico-solicitante").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Relatório";
	document.getElementById("iconeAcao").className="fa fa-list icones fa-3x";
	document.getElementById("card-principal").style.display="block";
	document.getElementById("card-secundario").style.marginTop="50px";
	document.getElementById("card-secundario").style.marginRight="2%";
	document.getElementById("card-secundario").style.width="32%";
	document.getElementById("card-secundario").style.height="530px";
	

	
});
/**************************SCRIPTS PARA VISUALIZAR HISTORICO SOLICITANTE***************************/
$("#btn-historico-solicitante").click(function(){
	$("#btn-historico-tecnico").fadeOut(5);
        $("#btn-historico-solicitante").fadeOut(5);
        $("#relatorio-historico").fadeOut(5);
	$("#card-historico-solicitante").fadeIn(220);
        $("#btn-voltar-solicitante").fadeIn(220);
        
	document.getElementById("titleAcoes").innerHTML = "Histórico de Solicitante";
	document.getElementById("iconeAcao").className="fa fa-history icones fa-3x";
	document.getElementById("card-principal").style.display="none";
	document.getElementById("card-secundario").style.marginTop="30px";
	document.getElementById("card-secundario").style.marginRight="5%";
	$("#card-secundario").animate({width:"90%", height: "550px"}, 300);
});	

$("#btn-voltar-solicitante").click(function(){
	$("#card-historico-solicitante").fadeOut(5);
        $("#btn-voltar-solicitante").fadeOut(5);
        $("#relatorio-historico").fadeIn(220);
	$("#btn-historico-tecnico").fadeIn(220);
        $("#btn-historico-solicitante").fadeIn(220);
	
	document.getElementById("titleAcoes").innerHTML = "Relatório";
	document.getElementById("iconeAcao").className="fa fa-list icones fa-3x";
	document.getElementById("card-principal").style.display="block";
	document.getElementById("card-secundario").style.marginTop="50px";
	document.getElementById("card-secundario").style.marginRight="2%";
	document.getElementById("card-secundario").style.width="32%";
	document.getElementById("card-secundario").style.height="530px";
	

	
});	
});