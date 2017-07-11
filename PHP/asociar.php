<?php

	include_once'PHP/conn.php';
	/*asociar los campos en base a la name=""*/

	/*id desde la url para llenar imput hiden y hacer consulta*/
	$id = $_GET['id'];


	$result = mysqli_query($conn, "SELECT * FROM alumnos WHERE cedula=$id");

	while($mostrar = mysqli_fetch_array($result))
		{
			$cedula = $mostrar['cedula'];
			$nombre = $mostrar['nombre'];
			$ape_1 = $mostrar['primer_apellido'];
			$ape_2 = $mostrar['segun_apellido'];
			$edad = $mostrar['edad'];
			$tel = $mostrar['telefono'];
			$direc= $mostrar['direccion'];
		}
?>