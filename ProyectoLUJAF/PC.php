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
  
    <title>LUJAF - PC</title>
</head>

<body>
    <div class="container">
        <div class="col" style="background-color: #E0C137;"><br>
            <div class="row"> 
            <input type="text" size="1" placeholder="LUJAF lo busques encontrarás"> 
         </div>
         <hr>
         <center>
          <a href="PaginaPrincipal.php" class="ui-btn ui-btn-inline">LUJAF</a>
          <a href="Celulares.php" class="ui-btn ui-btn-inline">Celulares</a>
        </center>
          </div>
    
          <div role="main" class="ui-content">
	
		<ul data-role="listview" data-filter="true" data-filter-placeholder="Buscar artistas..." data-inset="true" id="datospc">
		</ul>
	</div>
   
   </div>

</body>
</html>