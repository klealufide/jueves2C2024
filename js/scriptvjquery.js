$(document).ready(function(){

    $('#nombreError').hide();
    $('#emailError').hide();
    $('#fechaError').hide();


    let contador = 0;

    $("#boton_envio").click(function(){
        contador++;
        if(contador % 2 == 1){
            $("p").removeClass("colorRojo");
            $("p").addClass("colorAzul");

        } else {
            $("p").removeClass("colorAzul");
            $("p").addClass("colorRojo");
        }

        console.log(contador);
    })

    $("#imagenPrincipal").mouseenter(function(){
        $("#imagenPrincipal").attr("src","./images/servicio2.jpg");
    });
    $("#imagenPrincipal").mouseleave(function(){
        $("#imagenPrincipal").attr("src","./images/imagen1.jpg");
    });


    $("#enviarReservas").click(function(){
        var isValid = true;
        var nombre = $('#nombre').val();
        var fecha = $('#fecha').val();
        var email = $('#email').val();
    
        if (nombre == '') {
            $('#nombreError').show();
            isValid = false;
        } else {
            $('#nombreError').hide();
        }
    
        if (email == '') {
            $('#emailError').show();
            isValid = false;
        } else {
            $('#emailError').hide();
        }
    
        if (fecha === '') {
            $('#fechaError').show();
            isValid = false;
        } else {
            $('#fechaError').hide();
        }
    
    
        if (isValid) {
            alert('Formulario enviado correctamente.');
        }
    })



})

function showInfo(id) {
    var element = $("#" + id);
    if (element.length) {
        element.css("display", "block");
    }
}
