
<?php 

$aNumeros = array(10,1,100,2,3,4,5,6);

function maximo($aNumeros){

$counter=$aNumeros[0];

for ($i=1; $i < count($aNumeros); $i++) { 

	if( $aNumeros[$i] > $counter){
		$counter = $aNumeros[$i];
	}



}

return $counter ; 
 

}


echo "Nota maxima :" . maximo($aNumeros);



 ?>