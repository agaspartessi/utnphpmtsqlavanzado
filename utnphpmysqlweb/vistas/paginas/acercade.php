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


 <section class="row" id="acercade">
            <div id="caja1" class="col-sm-3" ><img src="img/foto.jpg" class="imgbio"></div>
            <div id="caja2" class="col-sm-9"><p> Gaspar Tessi editó dos discos: Metafísico (2016) y Yoísta(2018), y  además compuso “Youtuber” (2016) junto a Leo García. Sus canciones se destacan por atravesar temáticas urbanas con un trabajo meticuloso sobre las letras y melodías pop. Entre ellas podemos destacar Riquelme (canción homenaje al 10 de Boca popularizada en las redes) , Hoy estoy metafísico, Cerveza Artesanal (feat Camila Peralta), Dirección contraria(feat Walter Piancioli de Los Tipitos), Hace un año (feat Paloma Sirvén), y recientemente sus dos nuevos sencillos “Sube al uber” (2019) , un tema que retrata el extraño vínculo que establecemos con otras personas al usar plataformas de servicios desde nuestros celulares, y “Ya no miro más programas deportivos” (2019) una canción que surge de la angustia existencial de la final que Boca pierde en madrid y de la soledad que produce la compañía alienante de los panelistas de tv. </p></div>
 </section>


 </body>

</html>