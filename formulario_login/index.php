
 		
 	


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Document</title>

	<style>
		p{ background: #F97A8A ;padding: .5em;text-align: center;}
	</style>
</head>
<body>

	<div style="display: flex;  flex-direction:column; width: 40%;  padding: 1em; " > 
		<h1>FORMULARIO</h1>

			<?php 

	if($_POST){ /*si hay click*/

		/*print_r($_REQUEST); /*para mi*/

		$usuario = $_REQUEST["txtUsuario"]; /* variables */

 
		$clave = $_REQUEST["txtClave"]; /* variables */ 

		if($usuario != null && $clave != null ){
			header ("Location: acceso-confirmado.php"); 
		}

		else echo "<p >Completar el  formulario </p> ";

		
	} ; 

			

	 ?>



		<form  action="" method="POST" style="display: flex; flex-direction: column;" >
			
			<label for="txtUsuario">Usuario</label>
			<input type="text" name="txtUsuario" id="txtUsuario">

			<label for="txtClave">Contraseña</label>
			<input type="password" name="txtClave" id="txtClave">
			<br>
			<input type="submit" value="Enviar" class="btn btn-primary" style="width:50%; align-self: center;">
 

		</form>
	</div>
	
</body>
</html>