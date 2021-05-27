<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Suma_total.php</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<?php



			$aProductos = array();

			$aProductos[]= array(

				"nombre" => "Smart TV 4K UHD",
				"marca" => "Hitachi",
				"modelo" => "554KS20",
				"stock" => 1,
				"precio" => 50000

 
			) ; 



		$aProductos[]= array(

		"nombre" => "Smartphone Cel",
		"marca"  => "Samsungs",
		"modelo" => "Galaxy A30 Blanco",
		"stock" => 150,
		"precio" => 100000

	);

		$aProductos[]= array(

		"nombre" => "Aire acondicionado ",
		"marca" => "Surrey",
		"modelo" => "29000F Split 553AIQ12",
		"stock" => 0,
		"precio" => 150000

	);


		$aProductos[]= array(

		"nombre" => "Impresora laser ",
		"marca" => "Phillips",
		"modelo" => "H256-08",
		"stock" => 60,
		"precio" => 1000

	);

			
			
	?>
</head>
<body>

 <div>

	<table class="table">
			

			<thead>	
					<th>Nombre</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Stock</th>
					<th>Precio</th>
					<th>Accion</th>

			</thead>		

			
		
			<tbody>
				
				<?php 

					foreach ($aProductos as $producto) {
						echo "<tr><td>". $producto["nombre"] ."</td>
						<td>". $producto["marca"] ."</td>
						<td>". $producto["modelo"] ."</td>
						<td>". $producto["stock"] ."</td>
						<td>". $producto["precio"] ."</td>
						<td><button>Comprar</button></td></tr>
						

						"

						;


					}



				 ?>



			</tbody>
					


		</table>

</div>

		<h3>El precio total es de <?php 

			$counter=0;
			for ($i=0; $i < count($aProductos) ; $i++) { 
					$counter = $counter + $aProductos[$i]["precio"];    
			}

			echo $counter; 
		 ?></h3>


		
	
</body>
</html>