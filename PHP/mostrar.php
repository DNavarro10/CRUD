<?php 

include_once("conn.php");
/* buscar datos */
$resultado = mysqli_query($conn, "SELECT * FROM alumnos ORDER BY cedula ASC"); 
?>