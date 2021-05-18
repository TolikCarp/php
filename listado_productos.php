<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Listado de productos</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<?php 

	$aProductos = array();

	$aProductos[] = array(

		"nombre" => "Smart TV 4K UHD",
		"marca" => "Hitachi",
		"modelo" => "554KS20",
		"stock" => 1,
		"precio" => 58000

	);

	$aProductos[]= array(

		"nombre" => "Smartphone Cel",
		"marca"  => "Samsungs",
		"modelo" => "Galaxy A30 Blanco",
		"stock" => 150,
		"precio" => 30000

	);

		$aProductos[]= array(

		"nombre" => "Aire acondicionado ",
		"marca" => "Surrey",
		"modelo" => "2900F Split 553AIQ12",
		"stock" => 0,
		"precio" => 150000

	);

?>

<body>

<div class="container">
  <div class="row">
    <div class="col-12">

	       <h1> Listado de productos</h1>
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

	foreach ($aProductos as $item ) {
		echo "<tr><td>"	. $item["nombre"] ."</td>
		<td>"	. $item["marca"] ."</td>
		<td>"	. $item["modelo"] ."</td>
		<td>"	. $item["stock"] ."</td>
		<td>"	. $item["precio"] ."</td>
		<td>  <button>Comprar</button>   </td>

		</tr>" ;
		


						}




					/*for ($i=0; $i < count($aProductos); $i++) { 
							print_r($aProductos[$i]);
						}*/	


				?>
					

				</tbody>


			</table>
		</div>


		</div>
		
				
					

					
						
					
					

		</div>
</body>
</html>