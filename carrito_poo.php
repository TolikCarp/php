<?php 


	/**
	 * 
	 */
	class Cliente
	{

		public $dni;
		public $nombre;
		public $correo;
		public $telefono;
		public $descuento;

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
	}//end class




	class Producto
	{
		
		const  CALIDAD = 'A++';
		const  GARANTIA ="1 Año";
		protected $cod;
		protected $nombre;
		protected $precio;
		protected $descripcion;
		protected $iva;
	
		
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




		function __construct()
		{
			$this->iva=0.0;

	}	


  }//end class


  	
  	class Carrito
  	{

  		public $cliente;
		public $aProductos = array(); 
		public $subtotal; 
		public $total;
		
  		
  		function __construct()
  		{
  			
  		$this->total=0.0;
  		$this->subtotal=0.0;


  		}
  	}


  	$cliente1= new Cliente();
  	$cliente1->dni= "93566555";
	$cliente1 ->nombre="Jose";
	$cliente1 ->correo="jose@gmail.com";
	$cliente1 ->telefono="112224456";
	//$cliente1 ->descuento = 20;
	//$cliente1->imprimir(); 


	$producto1 = new Producto ();
	$producto1->setCod("20000008");
	$producto1->setNombre("Smart TV");
	$producto1->setPrecio(30000);
	$producto1->setDescripcion("Televisor LED FULL HD de 50 pulgadas");
	$producto1->setIva( 21 );  
	$producto1->calidad = Producto::CALIDAD ;
	$producto1->garantia = Producto::GARANTIA; 
	//print_r($producto1); 
	print_r( $producto1->getCod() . "<br>" );
	print_r( $producto1->getNombre() . "<br>" );
	print_r( $producto1->getPrecio() . "<br>" );
	print_r( $producto1->getDescripcion() . "<br>" );
	print_r( $producto1->getIva() . "<br>" );


 ?>