<?php 

$localhost = '127.0.0.1';
$usuario = 'root';
$pass = 'diego';
$db = 'estudiantes';


class conn {
	
	function conectarDB(){
		
		$conexion = mysqli_connect('$localhost', '$usuario', '$pass','$db');
		
		if(!$conexion){
			return;
			
		}
	
		return $conexion;
	}
}

?>