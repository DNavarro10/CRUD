<?php
// including the database connection file
include_once("conn.php");
 
if(isset($_POST['actu']))
{    
  
		$cedula = $_POST['id'];
		$nombre = $_POST['nombre'];
		$ape_1 = $_POST['ape-1'];
		$ape_2 = $_POST['ape-2'];
		$edad = $_POST['edad'];
		$tel = $_POST['tel'];
		$direc= $_POST['direc'];
	
        /* Query de actualzar*/
        $resultado = mysqli_query($conn, "UPDATE `alumnos` SET `cedula`='.$cedula.',`nombre`='".$nombre."',`primer_apellido`='".$ape_1."',`segun_apellido`='".$ape_2."',`edad`='.$edad.',`telefono`='.$tel.',`direccion`='".$direc."' WHERE 'cedula'= $cedula");
		
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: ./../index.php");
    }




?>