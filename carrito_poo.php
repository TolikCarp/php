<?php

date_default_timezone_set('UTC');

	class Cliente // clase
	{
		//propiedades
		protected $dni;
		protected $nombre;
		protected $correo;
		protected $telefono;
		protected $descuento;
		//$this->(nombre sin $ ) equivale a la  propiedad de dentro de la clase
		public function __get($propiedad){
			return $this->$propiedad ;
		}
		public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}
		public function imprimir(){
		echo "$this->dni <br> ";
		echo $this->nombre . " <br> ";
		echo $this->correo . " <br> ";
		echo $this->telefono . " <br> ";
		echo $this->descuento . " <br> ";
		}
		
		public function __construct()
		{
			$this->descuento = 0.0 ;
		}
	}//end class Cliente
	class Producto
	{
		
		const  CALIDAD = 'A++';
		const  GARANTIA ="1 Año";
		protected $cod;
		protected $nombre;
		protected $precio;
		protected $descripcion;
		protected $iva;
	
		public function __get($propiedad){
			return $this->$propiedad ;
		}
		public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}
					/*
					public function setCod($cod){ $this->cod=$cod;}
					public function getCod(){return $this->cod;}
					public function setNombre($nombre){$this->nombre=$nombre;}
					public function getNombre(){return $this->nombre;}
					public function setPrecio($precio){ $this->precio=$precio;}
					public function getPrecio(){return $this->precio;}
													//  argumento es igual a la variable = este argumento
					public function setDescripcion($descripcion){ $this->descripcion = $descripcion;}
					public function getDescripcion(){return $this->descripcion;}
					public function setIva($iva){$this->iva=$iva;}
					public function getIva (){return $this->iva;}
					*/// <- extender para ver get and set por cada propiedad -- (1 set y get por cada propiedad)
		function imprimir(){
				echo 	$this->cod . "<br>";
			    echo   $this->nombre . "<br>";
				echo	$this->precio . "<br>";
				echo	$this->descripcion . "<br>";
				echo	$this->iva . "<br>";
		}
		function __construct()
		{
			$this->iva=0.0;
		}
} //end class Producto
	
	class Carrito
	{
		protected $cliente;//obj
		protected $aProductos = array(); //arr
		protected $subtotal;
		protected $total;
		public function __get($propiedad){
			return $this->$propiedad ;
		}
		public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}
		
		
		function cargarProducto($producto){
		$this->aProductos[] = $producto;
		}
		function __construct()
		{
			
		$this->total=0;
		$this->subtotal=0;
		}

		function imprimirTicket(){

		echo		"<table>";
		echo	  "<tr> <td>Fecha : </td> <td>".  date("d/m/Y")  .  "</td> </tr>" ;
		echo	  "<tr> <td>DNI : </td> <td>".  $this->cliente->dni .  "</td> </tr>" ;
		echo	  "<tr> <td>Nombre : </td> <td>".  $this->cliente->nombre  .  "</td> </tr>" ;
		echo	  "<tr> <td>Productos : </td>  </tr>" ;
		    		foreach ($this->aProductos as $producto) {
		    		echo "<tr><td>" . $producto->nombre . "</td>
		    		<td>  $" . $producto->precio . "</td></tr>" ;
		    		
		    		$this->subtotal += $producto->precio ; 
		    		$this->total = $this->subtotal-( ($this->subtotal*$producto->iva)/100 ) ;

		    										}								
		echo	  "<tr> <td>Subtotal s/IVA: </td> <td> ". number_format($this->subtotal , 2, "," , ".") ." </td> </tr>" ;
		echo	  "<tr> <td>TOTAL: </td> <td> ". number_format($this->total, 2, "," , ".") ."  </td> </tr>" ;

					 
		echo 		"</table>";

		}

	}// end class Carrito
/*----------------------------------------------*/
/*Objetos*/
	$cliente1= new Cliente();
	$cliente1->dni= "347665451";
	$cliente1 ->nombre="Bernabe";
	$cliente1 ->correo="bernabe@gmail.com";
	$cliente1 ->telefono="+5411885986";
	$cliente1 ->descuento= 0.05;
	//$cliente1 ->imprimir();
	//$cliente1->imprimir();
	$producto1 = new Producto();
	$producto1->cod = "AB8767";
	$producto1->nombre = "Notebook 15 pulgadas HP";
	$producto1->precio = 30800;
	$producto1->descripcion = "Computadora portatil HP";
	$producto1->iva = 21 ;
	//$producto1->imprimir();
	//$producto1->calidad = Producto::CALIDAD ;
	//$producto1->garantia = Producto::GARANTIA;
	$producto2 = new Producto();
	$producto2->cod = "QWR579";
	$producto2->nombre = "Heladera Wirhlpol";
	$producto2->precio = 76000;
	$producto2->descripcion = "Heladera standart no froze ";
	$producto2->iva = 10 ;
	//$producto2-> imprimir();
	$carrito1 = new Carrito();
	$carrito1->cliente = $cliente1;
	$carrito1->cargarProducto($producto1);
	$carrito1->cargarProducto($producto2);
	//print_r($carrito1);
	
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Eco Market</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			
			<div class="col-6">
				
				<div>
					<div class="col-12" style="text-align: center; "><h1> ECO MARKET</h1></div>
					
						<table class="table">
							
							<?php  $carrito1->imprimirTicket(); ?>

						</table>
					
						
				</div>
			</div>
		</div>
		
	</body>
</html>