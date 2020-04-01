$(document).ready(function (){

 // $("#modalWarning").modal('show');

 $('#formLogin').submit(function(){
     var usuario = $('#usuario').val().toLowerCase();
     var clave = $('#clave').val();
    

     //Implementacion AJAX
 
     $.ajax({
         async : true,
         type: "POST",
         url:"util/login/login.php",
         data: {
             usuario: usuario,
             clave: clave
         },
         dataType: 'json',
         beforeSend: function(){
             $('#btn_submit').html("Consultando");
             $('#btn_submit').prop("disabled",true);

         },
         error: function(request,status,error){
             alert(request.responseText);

         },
         success:function(respuesta){
             switch(respuesta.estado){
                case 1: document.location = '';
                        break;
                case 2: $('#modalWarningBody').html(respuesta.mensaje);
                        $('#modalWarning').modal('show');
                        $('#clave').val('');
                        break;
                default:
                        alert('Error Desconocido ');
                        break;            
               
             }

         },
         complete: function(){
             $('#btn_submit').prop("disabled",false);
             $('#btn_submit').html("Acceder");
         } 

     });

     return false;
 });

});