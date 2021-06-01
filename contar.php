<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>contar</title>
</head>
<body>


<?php 

$aProductos = array(

		"nombre" => "Smartphone Cel",
		"marca"  => "Samsungs",
		"modelo" => "Galaxy A30 Blanco",
		"stock" => 150,
		"precio" => 100000

	);



	function contar($miArray){

		$cantidad = 0;

		foreach ($miArray as $item) {
			$cantidad++;
		}

		return $cantidad; 
	} 



      echo "La cantidad es " .  contar($aProductos);

	


 ?>

	
</body>
</html>