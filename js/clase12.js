$(document).ready(function () {
    $("#mostrar").click(function () {
        $('img').fadeIn(1000);
    })

    $('#ocultar').click(function () {
        $('img').fadeOut(1000);
    })
    $('#crecer').click(function () {
        $('img').animate({
            width: 500,
            height: 250,
            opacity: 0.5
        }, 1000);
    })

    $('#agregarRojo').click(function () {
        $('#cuadrado').addClass('rojo');
        $('#cuadrado').removeClass('azul');
    })
    $('#agregarAzul').click(function () {
        $('#cuadrado').addClass('azul');
        $('#cuadrado').removeClass('rojo');
    })
    $('#agregarAlternar').click(function () {
        $('#cuadrado').toggleClass("rosado");
    })

    $('#cambiarCss').click(function () {
        $('#cuadrado').css('width','900px');
        $('#cuadrado').css('height','900px');
    })

    $("#miparrafo").prepend("<h2>Bienvenidos a la Biblioteca Virtual de Aserri</h2>");
    $("#miparrafo").append("<h2>El final del elemento seleccciono que es miparrafo</h2>");

})