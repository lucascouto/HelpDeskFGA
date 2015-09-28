/*SCRIPTS PARA A PÁGINA INDEX*/

$(document).ready(function(){
	/*Ações para quando o botão de criar conta é clicado*/
	$(".btnCreateAccount").click(function(){
		document.getElementById("loginTitle").innerHTML = "Cadastro";
		$("#formLogin").fadeOut(5);
		$("#formCadastro").fadeIn(500);
		$("#rodape").animate({top: "900px"}, 50);
		$("#cardLogin").animate({width: "800px", position: "relative", left: "19%", paddingBottom:"65px"}, 350);
	});
	
	/*Ações para quando o botão de cancelar cadastro é clicado*/
	$(".btnCancelSubscribe").click(function(){
		document.getElementById("loginTitle").innerHTML = "Login";
		$("#formCadastro").fadeOut(5);
		$("#formLogin").fadeIn(500);
		$("#rodape").animate({top: "680px"}, 50);
		$("#cardLogin").animate({width: "400px", position: "relative", left: "35%", paddingBottom:"30px"}, 350);
	});
});