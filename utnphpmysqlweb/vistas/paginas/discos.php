<?php

if(!isset($_SESSION["validarIngreso"])){

  echo '<script>window.location = "index.php?ruta=ingreso";</script>';

  return;

}else{

  if($_SESSION["validarIngreso"] != "ok" && $_SESSION["validarIngreso"] != "esadmin" ){

    echo '<script>window.location = "index.php?ruta=ingreso";</script>';

    return;
  } 
  
}


$usuarios = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>
<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> Gaspar Tessi Diseñando en bootstrap </title>
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" href="micss.css">
 </head>
 <body>
 <script src="https://code.jquery.com/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>


<section id="contenedor" class="container-fluid"></section>

<section id="contenido"></section>


	<div class="page-header" style="color: #f1f1f1;">
		<h1>Discos</h1>
	</div>
	
	<section class="row" id="discos">
		<div  class="col-sm-6" ><div class="embed-responsive embed-responsive-1by1"><iframe  src="https://www.youtube.com/embed/jOxz-5YkzkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
		<div  class="col-sm-6"><div class="embed-responsive embed-responsive-1by1"><iframe   src="https://www.youtube.com/embed/k56FCnRomjM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></div>
	</section>

 </body>
</html>