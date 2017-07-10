<?php

	/*iniciar variables del form*/
	require 'Conn/conexion.php';
	require 'funciones.php';


			$cedula = "";
			$nombre = "";
			$ape_1 = "";
			$ape_2 = "";
			$edad = "";
			$tel = "";
			$direc = "";
			
		

			
				if(isset($_POST['insertar'])){
						$cedula = $_POST['cedula'];
						$nombre = $_POST['nobre'];
						$ape_1 = $_POST['ape-1'];
						$ape_2 = $_POST['ape-2'];
						$edad = $_POST['edad'];
						$tel = $_POST['tel'];
						$direc= $_POST['direc'];
					
						$insertar = "INSER INTO alumnos (cedula,nombre,primer_apellido,segun_apellido,edd,telefono,direccion) VALUES ('$cedula','$nombre','$ape_1','$ape_2','$edad','$tel','$direc',)";
					
						mysqli_query($conn,$insertar);
					
			
		}
	
		   
	
?>