$(function() {
    $("#boton_envio").click(function(){
      const url = "procesar_contacto.php";
      let data = {
        nombre : $("#nombre").val(),
        correo : $("#correo").val(),
        mensaje : $("#mensaje").val(),
      };
      $.post(url, data, function(result){
          if(result == '99'){
            alert('error al enviar el formulario');
          } 

          if(result == '00'){
            alert('Formulario enviado exitosamente');
          } 
      })
    });
  });