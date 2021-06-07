<?php 


$archivo = fopen("datos.txt", "r");

// if the file exists
if ($archivo) {
  // just reads the first raw		
  //echo fgets($archivo);



	// reads raw by raw with while loop
	while ( ($fila = fgets($archivo)) == true) {
		echo  $fila; 
	}

}

fclose($archivo); 

 ?>