<?php

include_once("php/conn.php");
 
if(isset($_POST['actu'])){    	{
  		$id = $_POST['id']; /* campo hidden*/	
	
		$cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
		$ape_1 = $_POST['ape_1'];
		$ape_2 = $_POST['ape_2'];
		$edad = $_POST['edad'];
		$tel = $_POST['tel'];
		$direc= $_POST['direc'];
	
        /* Query de actualzar*/
        $resultado = mysqli_query($conn, "UPDATE alumnos SET cedula='$cedula',nombre='$nombre',primer_apellido='$ape_1',segun_apellido='$ape_2',edad='$edad',telefono='$tel',direccion='$direc' WHERE cedula='$id'");
	}
        /*Redoreccionar a index*/
        header("Location: index.php");
 		mysqli_close($conn);
    }

?>