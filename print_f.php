<?php 
$aNotas = array(1,2,3,4,5);
$msg = "Hola, esto es un mensaje !!!";

	function imprimir($variable) {

	

		$content = array();

		
		if( is_array($variable) ) {

			for ($i=0; $i < count($variable); $i++) { 
				
			 	array_push($content, $variable[$i . "\n"] ) ; 
			}
			 
		   $str = json_encode($content);

		    file_put_contents("data.txt", $str); // array o string seg/variable
									 //$variable 	
			
			} 


			else   file_put_contents("data.txt", $variable);     

			
	} 


  imprimir($msg); // function       

 ?> 