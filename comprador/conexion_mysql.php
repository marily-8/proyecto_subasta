<?php 
try {

	$base=new PDO("mysql:host=localhost; dbname=subasta","root","");
	echo "";
	
} catch (Exception $e) {
	die("¡Error de conexion!".$e->getMessage());
	
}

?>