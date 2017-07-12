<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD semana 6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./../CSS/style.css">
	
</head>
<body>
	<div class="main">
		<div class="warp-php">
			<h1>Agregado</h1>
			<?php

				include_once ('conn.php');

					if(isset($_POST['insertar'])){
							{
							$cedula = $_POST['cedula'];
							$nombre = $_POST['nombre'];
							$ape_1 = $_POST['ape-1'];
							$ape_2 = $_POST['ape-2'];
							$edad = $_POST['edad'];
							$tel = $_POST['tel'];
							$direc= $_POST['direc'];

							$result = mysqli_query($conn,"INSERT INTO alumnos(cedula,nombre,primer_apellido,segun_apellido,edad,telefono,direccion) VALUES('$cedula','$nombre','$ape_1','$ape_2','$edad','$tel','$direc')");
					}

					mysqli_close($conn);

				}
			?>
			<div class="warp">
				<p>Se agrego el estudiante</p>
				<a href="./../index.php">Volver al inicio</a>
			</div>
		</div>		
	</div>
	
</body>
</html>