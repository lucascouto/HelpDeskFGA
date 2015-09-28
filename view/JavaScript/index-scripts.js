// JavaScript Document
$(document).ready(function(){
	$(".btnCreateAccount").click(function(){
		$("#formLogin").slideUp(5);
		$("#formCadastro").slideDown(500);
		document.getElementById("loginTitle").innerHTML = "Cadastro";
		document.getElementById("rodape").style.top="900px";
		document.getElementById("cardLogin").style.width="800px";
		document.getElementById("cardLogin").style.position="relative";
		document.getElementById("cardLogin").style.left="19%";
		document.getElementById("cardLogin").style.paddingBottom="65px";
	});
	$(".btnCancelSubscribe").click(function(){
		$("#formCadastro").slideUp(5);
		$("#formLogin").slideDown(500);
		
		document.getElementById("loginTitle").innerHTML = "Login";
		document.getElementById("rodape").style.top="680px";
		document.getElementById("cardLogin").style.width="400px";
		document.getElementById("cardLogin").style.position="relative";
		document.getElementById("cardLogin").style.left="35%";
		document.getElementById("cardLogin").style.paddingBottom="30px";
	});
});