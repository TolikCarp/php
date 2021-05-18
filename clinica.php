<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


	<?php

	$aPacientes = array();

	$aPacientes[]= array(

	 	"dni" => "33.456.235",
	 	"nombre"=> "Leon Guieco",
	 	"edad" => 77,
	 	"peso" => 100

	);

	$aPacientes[]= array(

	 	"dni" => "33.456.235",
	 	"nombre"=> "Jose Aguirre",
	 	"edad" => 40,
	 	"peso" => 81.50

	);

	$aPacientes[]= array(

	 	"dni" => "31.456.235",
	 	"nombre"=> "Cristina Aguilera",
	 	"edad" => 50,
	 	"peso" => 30.50

	);

	$aPacientes[]= array(

	 	"dni" => "43.000.235",
	 	"nombre"=> "Juan Palbo",
	 	"edad" => 25,
	 	"peso" => 70,

	);


	?>

	<style>
	
		table{background: blue;
			width: 100%;
			display: flex;
			flex-direction: column;
			align-items:center;
			
		}			
		
	</style>
</head>
<body>

		 <div class="container">
		 	<div class="row">
		 		<div class="col-12">
		 			<table class="table">
		 				<h1>Clinica Nutricion SA</h1>
		 				<thead>
		 					<th>Dni</th>
		 					<th>Nombre</th>
		 					<th>Edad</th>
		 					<th>Peso</th>
		 				</thead>
		 				<tbody>

		 					<?php

		 		foreach ($aPacientes as $paciente) {
		 			
		 			echo "<tr>
		 			<td>".$paciente["dni"]."</td>
		 			<td>".$paciente["nombre"]."</td>
		 			<td>".$paciente["edad"]."</td>
		 			<td>".$paciente["peso"]."</td>

		 			</tr>";


		 						}


		 					?>



		 					
		 				</tbody>
		 			</table>
		 		</div>
		 	</div>
		 </div>

</body>
</html>