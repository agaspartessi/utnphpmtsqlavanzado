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
 
 <section id="contenedor" class="container-fluid">
<section id="contenido">
 <h1>Registro</h1>
  <div>
    <p> ¡Hola! para poder recorrer este sitio te solicitamos que te registres al sitio, si ya estas registrado pulsando en la pestaña de Ingreso podrás colocar tu mail y clave para recorrer todo el sitio.
      
    </p>
    <form action="" method="POST">
      
       
      <label for="">Nombre:</label>
      <input type="text" id="nombre" name="registroNombre">
        
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="registroEmail">
      
       
      <label for="pwd">Contraseña:</label>
      <input type="password" id="pwd" name="registroPassword">
      
      <input type="submit" value="Enviar"> 
     
    </form>
    <?php
    //instanciar la clase del metodo estatico
    $registro = ControladorFormularios::ctrRegistro();
    
    
    ?>
</div> 
 
 </body>


</html>