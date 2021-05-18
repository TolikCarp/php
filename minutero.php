<?php 

$hr=21;
$min=10;


for ($i=1; $i < 60; $i++) { 
	
	$min++;  
	if($min == 60){
		$min = 0;
	
 		 
 	$hr ++;

 
 	if($hr == 24){
 		$hr = 0;
 	}	
 		
	}

echo "La hora es $hr:$min <br>";

}


?>