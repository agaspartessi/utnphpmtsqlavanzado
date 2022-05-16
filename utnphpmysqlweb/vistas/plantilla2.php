<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title> Gaspar Tessi Curso Php y Mysql Avanzado </title>
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 <link rel="stylesheet" href="micss.css">
 </head>
 <body>
 <h1 id="titulomundo"><img src="img/gasparbanner.png" alt="Página web de Gaspar Tessi" class="imgheader"></h1>
 <script src="https://code.jquery.com/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>

 
<section id="contenedor" class="container-fluid">
<header id="header" class="row">
            <nav id="nav" class="col-md-12">
                <ul id="navUl">
                	<li><a id="header2" href="index.php?ruta=inicio" style="color: #f1f1f1;">Inicio</a></li>
                    <li><a id="header2" href="index.php?ruta=acercade" style="color: #f1f1f1;">Acerca de</a></li>
                    <li><a id="header2" href="index.php?ruta=discos" style="color: #f1f1f1;">Discos</a></li>
                    <li><a id="header2" href="index.php?ruta=prensa" style="color: #f1f1f1;">Prensa</a></li>
                    <li><a href="index.php?ruta=registro" style="color: #f1f1f1;">Registro</a></li>
                    <li><a href="index.php?ruta=ingreso" style="color: #f1f1f1;">Ingreso</a></li>
                </ul>
            </nav>
</header>

<section id="contenido">
    <?php

    if (isset($_GET["ruta"])){
        if(
            $_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "acercade" ||
            $_GET["ruta"] == "discos" ||
            $_GET["ruta"] == "prensa" ||
            $_GET["ruta"] == "registro" ||
            $_GET["ruta"] == "editar" ||
            $_GET["ruta"] == "ingreso"
        ){
            include "paginas/" . $_GET["ruta"] . ".php";
        } else {
            include "paginas/error404.php";
        }
    } else {
        include "paginas/registro.php" ;
    } 
    ?>

	
	<footer class="row" id="pie"> 
		<div id="pie1" class="col"><a href="https://instagram.com/gaspartessi" target="_blank"><img src="img/redes.png" class="img-responsive" height="60"></a></div>
		<div id="pie2" class="col">Sitio desarrollado para el curso de UTN</div>
		<div id="pie3" class="col" style="color: #f1f1f1;">Año 2022</div>
	</footer>
	</section>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vistas/js/script.js"></script>
</body>
</html>