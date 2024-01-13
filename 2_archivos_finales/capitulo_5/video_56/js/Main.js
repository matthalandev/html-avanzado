$(document).ready(function(){
    var index = 4;
    $("#b_add").click(function(){
        var li = $("<li>Texto "+index+"</li>");
        index = index + 1;
        $("#botonera").append(li);
    });

    $(".b_lista").click(function(){
        var texto = $(this).html();
        $("#contenedor").html("<h1>"+texto+"</h1>");
    });

    $("#b_ocultar").click(function(){
        $("#botonera").toggleClass("oculto");
    });
})


