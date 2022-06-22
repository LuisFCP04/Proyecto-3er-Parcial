<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="themes/LUJAF.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="jqueryM/jquery.mobile.structure-1.4.5.min.css" /> 
    <script src="jqueryM/jquery-1.11.1.min.js"></script> 
    <script src="jqueryM/jquery.mobile-1.4.5.min.js"></script>
    <script src="ApiLujaf.js"></script> 
  
    <title>LUJAF - Página principal</title>
</head>

<body onload="obtenerDatos()">
    <div class="container">
        <div class="col" style="background-color: #E0C137;"><br>
            <div class="row"> 
            <a href="#popupLogin" data-rel="popup" data-position-to="window"  data-transition="pop"><img src="imagenes/usuario.png" width="10%" height="10%"></a>
<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all" style="background-color: #5E5D57;">>
    <form>
         
        <div style="padding:10px 20px; ">
            
            <label for="un" style="color: white;">Usuario:</label>
            <input type="text" name="user" id="un" value="" placeholder="Escriba su nombre de usuario" data-theme="a">
            <label for="pw" style="color: white;">Contraseña:</label>
            <input type="password" name="pass" id="pw" value="" placeholder="Escriba su contraseña" data-theme="a" >
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check">iniciar sesión</button>
        </div>
    </form>
</div>

<a href="Carrito.php" class="ui-btn ui-btn-inline" >Carrito</a>


           </div>
       
        <hr>
        <center>
          <a href="PC.php" class="ui-btn ui-btn-inline">PC</a>
          <a href="Celulares.php" class="ui-btn ui-btn-inline">Celulares</a>
          <a href="#" class="ui-btn ui-btn-inline"  >Premier</a>
        </center>
    </div>
    <h4>Recomendaciones</h4>
    

    <div role="main" class="ui-content">
	
		<ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar productos" data-inset="true" id="datos">
		</ul>
	</div>
          
    </div>
    </div>
		
	</div>
</div>

</body>
</html>