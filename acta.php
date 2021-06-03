

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Actas</title>

 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


 	<?php 

		$aAlumnos = array();

		$aAlumnos[]=array(

			"ID"=>1,
			"NOMBRE"=> "Roberto Carlos",
			"NOTA 1" => 2,
			"NOTA 2" => 7



		);


		$aAlumnos[]=array(

			"ID"=>2,
			"NOMBRE"=> "Luis Chilavert",
			"NOTA 1" => 10,
			"NOTA 2" => 5


		);


		$aAlumnos[]=array(

			"ID"=>3,
			"NOMBRE"=> "Gato Gaudio",
			"NOTA 1" => 8,
			"NOTA 2" => 10


		);

		
 ?>
 </head>
 <body>


 	<div class="container">
 		
 		<div class="row">
 			
 			<div class="col-12" style="text-align: center;">
 				
 				<h1 >Lista de Actas</h1> 
 				<table class="table">

 					<thead>
 					<th>ID</th>
 					<th>Nombre</th>
 					<th>Nota 1</th>
 					<th>Nota 2</th>	
 					<th>Promedio</th>
 					</thead>

 					<tbody>
 						
 						<?php 

 						for ($i=0; $i <  count($aAlumnos) ; $i++) { 

 							
 				 		
 									$prom = ($aAlumnos[$i]["NOTA 2"]+$aAlumnos[$i]["NOTA 1"] ) ;
 									$promtot = $prom / 2;
 				 		 

 							echo "<tr><td>". $aAlumnos[$i]["ID"] . "</td>
 							<td>". $aAlumnos[$i]["NOMBRE"] . "</td>
 							<td>". $aAlumnos[$i]["NOTA 1"] . "</td>
 							<td>". $aAlumnos[$i]["NOTA 2"] . "</td>
 							<td>". $promtot  . "</td> 
 							 



 							</tr>";

 							 $general = 0;

 							  for ($i=0; $i < count($promtot); $i++) {  
 								$general =+ $promtot;  
 								
 							}







 						}
 						 


  

 						 ?>


 					</tbody>

 					

 				</table>
 				



 			</div>
 			<div>
 					<?php 
 					$contador = 0;
 					

 					for ($i=0; $i < count($aAlumnos) ; $i++) { 
 						 $contador++ ;  
 					}  

 					


 					echo "Promedio general de notas: " . $contador  ?>

 				</div> 

 		</div>

 	</div>

 	
 </body>
 </html>


 	
 </body>
 </html>