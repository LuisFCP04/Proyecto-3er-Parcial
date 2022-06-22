<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jquerymobile/jquery.mobile-1.4.5.min.css">
   <script src="jquerymobile/jquery-1.11.1.min.js"></script> 
   <script src="jquerymobile/jquery.mobile-1.4.5.min.js"></script>
   <link rel="stylesheet" href="PaginaPrincipal.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>LUJAF - Busqueda</title>
</head>

<body style="background-color: aqua;">
    <div class="container">
    <div class="col" style="background-color: #E0C137;"><br>
    <div class="row"> <input type="text" size="33" placeholder="LUJAF lo que busques encontrarás">
        <a href="Login.php">
         <img src="imagenes/usuario.png"
         width="40" height="40">
        </div>
       
        <hr>
        <a href="#" class="ui-btn ui-btn-inline">PC</a>
        <a href="#" class="ui-btn ui-btn-inline">Celulares</a>
        <a href="#" class="ui-btn ui-btn-inline">Premier</a>
    </div>
    <div class="col">
        <div class="row">
        <form>
    <fieldset data-role="collapsible">
        <legend>Filtros</legend>
        <label for="textinput-f">Precio máximo:</label>
        <input type="text" name="textinput-f" id="textinput-f" placeholder="Text input" value="">
        <div data-role="controlgroup">
            <input type="checkbox" name="checkbox-1-a" id="checkbox-1-a">
            <label for="checkbox-1-a">*Marca ejemplo*</label>
            <input type="checkbox" name="checkbox-2-a" id="checkbox-2-a">
            <label for="checkbox-2-a">*Marca 2 ejemplo*</label>
            <input type="checkbox" name="checkbox-3-a" id="checkbox-3-a">
            <label for="checkbox-3-a">*Marca 3 ejemplo*</label>
        </div>
    </fieldset>
</form>

        </div>
    </div>    
    <h4>Resultados para : </h4>
    </div>

</body>
</html>