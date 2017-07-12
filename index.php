
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD semana 6</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

</head>

<body>
    <div class="contenedor">
        <div class="titulo">
            <header>
                <div>
                    <h1>Curso de PHP - Semana 5</h1>
                </div>
                <div>
                    <p>PHP y MySQL</p>
                </div>
            </header>
        </div>
        <div class="main">
            <div class="formulario">
               
       
                <div class="warp">
                 <h2>Alumnos</h2>
                 	<table class="table">
                 	
                 		<tr>
                 			<td>Cedula</td>
                 			<td>Nombre</td>
                 			<td>1º Apellido</td>
                 			<td>2º Apellido</td>
                 			<td>Edad</td>
                 			<td>Telefono</td>
                 			<td>Direccion</td>
                 		</tr>
                 		<?php include_once("PHP/mostrar.php")?>
                 		<?php 
						/* llenar los campos desde la base de datos*/
						while($mostrar = mysqli_fetch_array($resultado)) {         
							echo "<tr>";
							echo "<td>".$mostrar['cedula']."</td>";
							echo "<td>".$mostrar['nombre']."</td>";
							echo "<td>".$mostrar['primer_apellido']."</td>";
							echo "<td>".$mostrar['segun_apellido']."</td>";    
							echo "<td>".$mostrar['edad']."</td>";    
							echo "<td>".$mostrar['telefono']."</td>";
							echo "<td>".$mostrar['direccion']."</td>";    
							echo "<td><a href=\"editar.php?id=$mostrar[cedula]\">Editar</a> | <a href=\"PHP/borrar.php?id=$mostrar[cedula]\" onClick=\"return confirm('Desea eliminar?')\">Borrar</a></td>";        
						}
						?>
                 		
                 	</table>               
                </div>
           		<a href='alumno.html'><button class="btn btn-primary">Nuevo</button></a>
            </div>
    
        </div>
        
        <footer>
            <div>
                <p>
                    Diego Navarro - PHP 2017
                </p>
            </div>
        </footer>
    </div>
    <script src="JS/validar.js"></script>
</body>

</html>