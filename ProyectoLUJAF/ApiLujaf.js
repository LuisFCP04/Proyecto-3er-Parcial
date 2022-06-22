function obtenerDatos()
{
    $.get( "http://localhost:8080/apibackend/public/obtenerArtistas", function( data ) {
        $("#datos").empty();
        data.forEach(element => {
            $("#datos").append('<li><a href="DetallesProducto.php" class="ui-btn ui-btn-icon-right ui-icon-carat-r" onclick="getArtista('+element.id+')">'+element.nombre+'</a></li>');
        });
      });
}


function getArtista(id)
{
    $("#imagen").empty();
    $("#nombre").empty();
    $("#descripcion").empty();
    $("#precio").empty();
    $("#proveedor").empty();
    $.get("http://localhost:8080/apibackend/public/ConsultarArtista/"+id,
    function(data, status){
        $("#imagen").append('<img src="'+data.imagen+'" width="100%">');
        $("#nombre").append('<h3>'+data.nombre+'</h3>');
        $("#descripcion").append('<h5>'+data.descripcion+'</h5><hr>');
        $("#proveedor").append('<h4">'+data.proovedor+'</h4><hr>');
        $("#precio").append('<h4">$'+data.precio+'</h4>');

        

    });
}


