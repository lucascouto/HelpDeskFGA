$(document).ready(function(){
    $(".btn-registrar").click(function(){
        $("#local-problema").fadeIn(300);
        $("#card-chamado").animate({height:"530px"});
    });
    
    
    
    
    
    /*$("#form-codigo-patrimonio").submit(function(e){
       e.preventDefault();
       
       $.ajax({
          url:'chamado.php',
          type:'post',
          dataType:'html',
          data: {
              'codigoPatrimonio': $("#codPatrimonio").val()
          }
       }).done(function(data){
           alert(data);
       });
    });*/
});

function enviarCodPatrimonio() {
  var xhttp = new XMLHttpRequest();
  
  xhttp.open("POST", "chamado.php", true);
  xhttp.send();
}


