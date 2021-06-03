<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Prueba</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>


	<?php 
 	
	/*
		multiples lineas
	*/
	# Otro forma de comentar 
	$nombre ="Anatoliy ";
	$apellido = "Stryzhekozin";
	$edad = 30;
	
	
	$vector= array("hola");

	echo $vector[0];



	 ?>


	 <table class="table" >
	 		
	 		<tr>
	 			
	 			<td>Fecha</td>
	 			<td><?php echo date("d/m/Y") ?> </td> 

	 		</tr>


	 		<tr>
	 			
	 			<td>Nombre</td>
	 			<td><?php echo $nombre ?></td>

	 		</tr>

	 		<tr>
	 			
	 			<td>Apellido</td>
	 			<td><?php echo $apellido ?></td>

	 		</tr>

	 		<tr>
	 			<td>Edad</td>
	 			<td><?php echo $edad  ?></td>
	 		</tr>



	 </table>
	
</body>
</html>