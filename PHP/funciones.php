<?php 

    
   class funciones{

	   
        function insert(){

			$insertar = "INSERT INTO `alumnos`(`cedula`, `nombre`, `primer_apellido` ,'segun_apellido', `edad`, `telefono`, `direccion`) VALUES ('$cedula','$nombre','$ape_1','$ape_2','$edad','$tel','$direc')";
			
				
        }
    
   }

	$insert = new funciones();

?>