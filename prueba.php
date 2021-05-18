<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<?php 


	

						/*$stock = 100;

						/*echo $stock >10 ? "Hay stock" : $stock > 0 && $stock <= 10? "Poco stock":"No hay stock";*/
						/* if($stock > 10){ echo "Hay stock";}
						 	 else if ($stock > 0 && $stock <= 10 ) {echo "Hay poco stock";}
						 	else echo "No hay stock";*/

						/*$val = rand (1,5);

						echo $val % 2 == 0 ? "El numero $val es par": "El numero $val es impar "*/

						    $aProductos =[];

						 	 $aProductos[]= array(
						 	 		'Nombre' => "TV 22 PULGADAS",
						 	 		'Marca' => "Hitachi" ,
						 	 		'Modelo' => "GFH 582" ,
						 	 		'Stock' => 5,
						 	 		'Precio' => 20100,

						 	  );

						 	  $aProductos[] = array(
						 	 		'Nombre' => "TV 32 PULGADAS",
						 	 		'Marca' => "Phillips" ,
						 	 		'Modelo' => "FD 2" ,
						 	 		'Stock' => 100,
						 	 		'Precio' => 2000,

						 	  );

						 	   $aProductos[] = array(
						 	 		'Nombre' => "TV 50 PULGADAS",
						 	 		'Marca' => "Sony" ,
						 	 		'Modelo' => "S15" ,
						 	 		'Stock' => 0,
						 	 		'Precio' => 3000,

						 	  );
						

					

	
		

?>

	
	<table class="table">


				<thead>
					<th>Nombre</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Stock</th>
					<th>Precio</th>

				</thead>

				<tbody>

						<?php  

						
								
								
					$var =0 ;
					for ($i=0; $i < count($aProductos)  ; $i++) { 
					echo"<tr><td>" . $aProductos[$i]["Nombre"] ."</td>" ;
					echo"<td>" . $aProductos[$i]["Marca"]  ."</td>" ;
					echo"<td>" . $aProductos[$i]["Modelo"] ."</td>" ;
					echo"<td>" . $aProductos[$i]["Stock"] == 0? "Sin stock":($aProductos[$i]["Stock"] <= 10 && 
					$aProductos[$i]["Stock"] > 0 ? "Poco stock":"Hay stock" ) ."</td>";
					echo"<td>" . $aProductos[$i]["Precio"] ."</td></tr>";
					


							}


							
								
							for ($i=0;  $i < count($aProductos); $i++) { 
								
							 	$var +=$aProductos[$i]["Precio"];


							}
							
							echo " <table><tr><td>". "El SUB-TOTAL  es de  $var pesos" . "</tr></td></table>"
						?>

					<!--<tr>
						<td> <?php echo $aProductos[0]["Nombre"] ?> </td>
						<td> <?php echo $aProductos[0]["Marca"]  ?> </td>
						<td> <?php echo $aProductos[0]["Modelo"] ?> </td>
						<td> <?php echo $aProductos[0]["Stock"] > 10 ? "Hay stock":($aProductos[0]["Stock"] > 0 &&  $aProductos[0]["Stock"] <= 10 ? "Poco stock" : "No hay stock" )  ?> </td>
						<td> <?php echo $aProductos[0]["Precio"]?> </td>
						
					</tr>-->




				</tbody>
		

	</table>




</body>
</html>

