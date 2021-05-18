<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Ficha Personal</title>
	<!--Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<?php 

 $aNombreApellido = array( "Anatoliy", "Stryzhekozin");
 $numeros = array(1,2,3,4,5,6);
 $edad = 30;
 $peliculaFavorita = array("Juego de miedo", "Soy leyenda", "Terminator", "Buscando a Nemo")

?>

<body>

	<div>
		<h1>Ficha personal</h1>
		<table class="table">

			<tr>
				<td>Fecha</td>
				<td><?php echo date("d/m/Y")?></td>

			</tr>

			<tr>
				
				<td>Nombre y apellido</td>
				<td> <?php foreach ($aNombreApellido as $num){ echo " $num"; } ?> </td>


			</tr>

			<tr>
				
				<td>Edad</td>
				<td><?php echo $edad ?></td>

			</tr>

			<tr>
				
				<td>Pelicula favorita</td>
				<td><?php foreach ($peliculaFavorita as $peli) {
					if ($peli == "Juego de miedo") echo $peli;
				} ?></td>

			</tr>


			<tr></tr>
			
		</table>


	</div>
	
</body>
</html>