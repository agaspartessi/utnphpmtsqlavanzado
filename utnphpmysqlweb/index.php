<?php 
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

//instanciar objetos

$plantilla = new ControladorPlantilla();

//ejecutar el metodo(funcion)

$plantilla -> ctrGetPlantilla();

//probando conexion a base de datos
/*$conexion = Conexion::conectar();
echo '<pre>'; print_r($conexion); echo '</pre>';*/
