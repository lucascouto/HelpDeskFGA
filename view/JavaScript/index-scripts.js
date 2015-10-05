/*SCRIPTS PARA A PÁGINA INDEX*/

$(document).ready(function(){
	/*Ações para quando o botão de criar conta é clicado*/
	$(".btnCreateAccount").click(function(){
            document.getElementById("loginTitle").innerHTML = "Cadastro";
            $("#formLogin").fadeOut(5);
            $("#formCadastro").fadeIn(500);
            $("#rodape").animate({top: "780px"}, 50);
            $("#cardLogin").animate({width: "50%", position: "relative", left: "-7%", height: "500px"}, 350);
	});
	
	/*Ações para quando o botão de cancelar cadastro é clicado*/
	$(".btnCancelSubscribe").click(function(){
            document.getElementById("loginTitle").innerHTML = "Login";
            $("#formCadastro").fadeOut(5);
            $("#formLogin").fadeIn(500);
            $("#rodape").animate({top: "680px"}, 50);
            $("#cardLogin").animate({width: "400px", height: "383.188px", position: "relative", left: "2%", paddingBottom:"30px"}, 350);
	});
});