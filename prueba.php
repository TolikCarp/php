<?php 

/*declare( strict_types = 1);
						  
	


	function calcularNeto(float $bruto) : float{
						//tipo de dato que entra/sale	

		return $bruto ; 


	}


	//print_r(calcularNeto(12.5)); 


 function strict(float $numero): ? int{

 	return $numero; //> 0 ? $numero: null ;

 } 

 print_r(strict(105)) ; 

 /*
Si le paso un decimal en vez de entero
Fatal error: Uncaught TypeError: Argument 1 passed to strict() must be of the type int, float given, called in C:\xampp\htdocs\php\prueba.php on line 26 and defined in C:\xampp\htdocs\php\prueba.php:20 Stack trace: #0 C:\xampp\htdocs\php\prueba.php(26): strict(5.5


 */
$pera ; 

 abstract class Fruta 
 { 
 	

 abstract public function comer();// ojo declaracion de funcion abstract 
 
 }


 class Naranja extends Fruta
 {

 	public function comer (){
 		echo "Comer Naranja <br>";
 	}

 }

class Manzana extends Fruta 
 {

 	public function comer(){

 		echo "Comer Manzana <br>" ; 
 	}
 		
 	}
/**
 * 
 */
class Mandarina 
{
	
	public static $promoMandarina= array(10,20); // array 

	public static function calcularPromoMandarina($kg){
					//llama funciones y constantes dentro de la misma clase 
	$a = $kg > 5 ? self::$promoMandarina[0]*$kg : self::$promoMandarina[1]*$kg ;

	return "Si llevas mas de 5 kilo el precio te sale $10, precio regular $20. El total a pagar es = $$a"; 

	} 

	public static function sumarCajones($cajon1,$cajon2){

		echo  $cajon1 + $cajon2 . "<br>"; 

	}
}

$manzana1 = new Manzana();
$manzana1->comer();

$naranja1 = new Naranja(); 
$naranja1->comer();

$mandarina1 = new Mandarina ; 

echo $mandarina1 instanceof Fruta ? "Si es una instancia de la clase frunta " : "No es una instancia de la clase Fruta <br>" ;


Mandarina::sumarCajones(10,2);// accedo a statick 

//echo Mandarina::calcularPromoMandarina(6);



$i = 9;  

while ($i < 10):

    echo $i. "<br>"; 

    $i++;

endwhile;


 ?>



