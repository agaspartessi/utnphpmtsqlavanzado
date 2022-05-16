<?php 
Class Conexion{
	static public function conectar() {

	$link = new PDO ("mysql:host=localhost; port=3306; dbname=php_curso_utn",
		"root",
		"");
		$link -> exec("set names utf8");
		return $link;
	}
} 


?>

