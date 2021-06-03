<?php 

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('error_reporting', E_ALL); 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Empleados</title>


 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



 	<?php 

		$aEmpleados = array();

		$aEmpleados[]=array(

			"DNI"=>32650008,
			"NOMBRE"=> "Roberto Carlos",
			"SUELDO BRUTO" => 100


		);


		$aEmpleados[]=array(

			"DNI"=>33654578,
			"NOMBRE"=> "Jose Luis Chilavert",
			"SUELDO BRUTO" => 45000


		);


		$aEmpleados[]=array(

			"DNI"=>22654555,
			"NOMBRE"=> "Enzo Perez",
			"SUELDO BRUTO" => 100000


		);

		$aEmpleados[]=array(

			"DNI"=>12335645,
			"NOMBRE"=> "Julio Grondona",
			"SUELDO BRUTO" => 600000.555555 


		);

			$aEmpleados[]=array(

			"DNI"=>45987844,
			"NOMBRE"=> "Juana De Arco",
			"SUELDO BRUTO" => 330000.444 


		);

		
 ?>

 </head>
 <body>

 	<div class="container">
 		
 		<div class="row">
 			
 			<div class="col-12" style="text-align: center;">
 				
 				<h1 >Lista de empleados</h1> 
 				<table class="table">

 					<thead>
 					<th>DNI</th>
 					<th>Nombre</th>
 					<th>Sueldo</th>
 					</thead>

 					<tbody>
 						
 						<?php 

 						for ($i=0; $i <  count($aEmpleados) ; $i++) { 

 							
 				 		$sueldoNeto =  $aEmpleados[$i]["SUELDO BRUTO"] = $aEmpleados[$i]["SUELDO BRUTO"] - $aEmpleados[$i]["SUELDO BRUTO"] * 0.15 ; /*se ejecuta la variable inclusive si no es llamada??? */

 				 		 $capital =  json_encode ($aEmpleados[$i]["NOMBRE"]) ; /* array to string */
 				 		 $letter = strtoupper($capital); /* string to capital letter */
 				 		 $capitalLetter = trim($letter, '"'); /* remove double queotes */ 

 							echo "<tr><td>". $aEmpleados[$i]["DNI"]  . "</td>
 							<td>". $capitalLetter . "</td>
 							<td>". number_format($sueldoNeto, 2,  "," ,  "." )   . "</td>    



 							</tr>";



 						}
 						 


  

 						 ?>


 					</tbody>

 					

 				</table>
 				



 			</div>
 			<div>
 					<?php 
 					$contador = 0;

 					for ($i=0; $i < count($aEmpleados) ; $i++) { 
 						$contador++ ;  
 					}  

 					echo "Cantidad de empleados activos: " . $contador ?>

 				</div> 

 		</div>

 	</div>

 	
 </body>
 </html>