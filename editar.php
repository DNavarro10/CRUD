<?php include_once("PHP/update.php");?>
<?php include_once("PHP/asociar.php");?>
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
                    <h1>Editar contenido</h1>
                </div>
            </header>
        </div>
        <div class="main">
            <div class="formulario">
                <div class="warp">
                    <form action="editar.php" method="post" class="form">
                   
                        <fieldset>
                            <legend>Editar datos</legend>
                      		
							
                            <table class="table">
                              
                                <tr>
                                    <td class="col"><b>Cedula :</b></td>
                                    <td class="fila"><!-- input que no permite copy paste con funcion JS para solo recibir numeros-->
                                        <input type="text" name="cedula" value="<?php echo $cedula;?>" required="required" onkeypress="return justNumbers(event);" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" min="1" class="fila form-control "></td><!--input validado-->
                                </tr>
                                
                                <tr>
                                    <td class="col"><p>Nombre :</p></td>
                                    <td><input type="text" name="nombre" value="<?php echo $nombre;?>" required="required" class="fila form-control"></td>
                                </tr>

                                <tr>
                                    <td class="col"><p>Primer Apellido :</p></td>
                                    <td><input type="text" name="ape_1" value="<?php echo $ape_1;?>" required="required" class="fila form-control"></td>
                                </tr>

                                <tr>
                                    <td class="col"><p>Segundo Apellido :</p></td>
                                    <td><input type="text" name="ape_2" value="<?php echo $ape_2;?>" required="required" class="fila form-control"></td>
                                </tr>

                                <tr>
                                    <td class="col"><p>Edad :</p></td>
                                    <td><input type="text" name="edad" value="<?php echo $edad;?>" required="required" onkeypress="return justNumbers(event);" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" min="1" class="fila form-control"></td><!--input validado-->
                                </tr>

                                <tr>
                                    <td class="col"><p>Tel&eacute;fono :</p></td>
                                    <td><input type="text" name="tel" value="<?php echo $tel;?>" required="required" onkeypress="return justNumbers(event);" onselectstart="return false" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" min="1" class="fila form-control"></td>
                                </tr>

                                <tr>
                                    <td class="col">
                                        <p>Direcc&iacute;on :</p>
                                    </td>
                                    <td>
                                        <textarea class="fila form-control" name="direc" rows="4" cols="50"><?php echo $direc;?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <center>
                                          <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                          <input type="submit" class="btn" name="actu" value="Actualizar">
                                        </center>
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                        
                        <a href='index.php'>Volver</a>
                    </form>
                </div>
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