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
		<h1>Prensa</h1>
	</div>
	<section  id="prensa">
		<div ><img src="img/hojaindie1.png" class="imgprensa" ></div>
		<br>
		<div ><img src="img/hojaindie2.png" class="imgprensa"></div>
		<br>
		<div ><img src="img/hojaindie3.png"class="imgprensa"></div>
	</section>
 </body>
</html>