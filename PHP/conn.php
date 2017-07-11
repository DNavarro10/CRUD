<?php

		/* config */
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "estudiantes";

		
		$conn = mysqli_connect($host,$user,$pass,$db);

			if($conn->connect_error){
			echo "Hay error en la conexion";
			exit();
			}
			
	
	
?>