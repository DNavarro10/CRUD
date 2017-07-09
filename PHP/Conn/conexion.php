<?php 

class conn {
	
	private	$localhost = '127.0.0.1';
	private	$usuario = 'root';
	private	$pass = 'diego';
	private	$db = 'estudiantes';

	
	public function conectarDB(){
		
		$conexion = mysqli_connect('$localhost', '$usuario', '$pass','$db');
		
		if(!$conexion){
			return;
			
		}
	
		return $conexion;
	}
}

?>