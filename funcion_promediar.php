<?php 

$aNumeros = array(1,2,3,4,5,6);

function promediar($aNumeros){

$counter=0;

for ($i=0; $i < count($aNumeros); $i++) { 
	$counter = $counter + $aNumeros[$i];  
}

return $counter / count($aNumeros);
 

}


echo promediar($aNumeros);



 ?>



