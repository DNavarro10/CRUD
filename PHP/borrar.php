<?php 

include("conn.php");
 

$cedula = $_POST['id'];


$resultado = mysqli_query($mysqli, "DELETE FROM alumnos WHERE cedula=$cedula");
 

header("Location: ./../index.php");
 ?>