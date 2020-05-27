<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "fpkvpsnn_tierraoroDB";    // sera el valor de nuestra BD 
	$usuariodb = "fpkvpsnn_tierra";    // sera el valor de nuestra BD 
	$clavedb = "Tierraoro2020*";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_pagos = "pagos"; 	   // tabla de pagos
	$tabla_lotes = "lotes"; 	   // tabla de lotes
	$tabla_clientes ="clientes";  // tabla de clientes
	$tabla_meses ="meses";
	

	//error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);
	$conexion->set_charset("utf8");


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>

<?php
/*
$conexion = mysqli_connect('localhost','fpkvpsnn_tierra','Tierraoro2020*','fpkvpsnn_tierraoroDB');
$conexion->set_charset("utf8");
if (!$conexion) {
	die("Ocurrio un error en la conexión" . mysqli_connect_error());
}*/
?>
