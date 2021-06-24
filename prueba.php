<?php 

declare( strict_types = 1);
						  
	


	function calcularNeto(float $bruto) : float{
						//tipo de dato que entra/sale	

		return $bruto ; 


	}


	//print_r(calcularNeto(12.5)); 


 function strict(float $numero): ? int{

 	return $numero; //> 0 ? $numero: null ;

 } 

 print_r(strict(105))

 /*
Si le paso un decimal en vez de entero
Fatal error: Uncaught TypeError: Argument 1 passed to strict() must be of the type int, float given, called in C:\xampp\htdocs\php\prueba.php on line 26 and defined in C:\xampp\htdocs\php\prueba.php:20 Stack trace: #0 C:\xampp\htdocs\php\prueba.php(26): strict(5.5


 */


 ?>



