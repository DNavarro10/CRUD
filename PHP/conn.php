<?php


	
	$localhost = '127.0.0.1';
	$usuario = 'root';
	$pass = '';
	$db = 'estudiantes';

	
			$conn = mysqli_connect("$localhost","$usuario","$pass") or die ("No se pudo conectar"); 
			mysqli_select_db($conn, "estudiantes") or die ("No existe la base de datos");   
	
?>