<?php
class conexion {
	
	private	$localhost = '127.0.0.1';
	private	$usuario = 'root';
	private	$pass = 'diego';
	private	$db = 'estudiantes';

	
	public function conectarDB(){
    public $conn;
        
        public function __construct{

            $thi -> conn = mysqli_connect('$localhost', '$usuario', '$pass','$db');

            if(!$thi -> conn){
                echo "Error in Connecting ".mysqli_connect_error();         
            }
        }
    }
}
?>