<?php

//                  ------------------PERSONA--------------------------
 abstract class Persona{


 	public $dni;
 	public $nombre;
 	public $edad;
 	public $nacionalidad;
 	//const ESPECIE = "Ser humano" ; 

 	// imprime datos que se le pasan al objeto
 	abstract public function imprimir();  
 	// forma de setear los datos que luego se le pasan a las demas funciones o a su acceso 
   public function __construct($dni,$nombre,$edad,$nacionalidad)
 	{	
 		$this->dni=$dni ;
 		$this->nombre=$nombre;
 		$this->edad=$edad;
 		$this->nacionalidad=$nacionalidad;
 	}


 }


//------------------------------------------ALUMNO-------------------------

  // HEREDA FUNCIONES DEL PADRE // para agregarles mas propiedades copiar/pegar y agregar !!!! 
 class Alumno extends Persona
 {
	public $legajo;
	public $notaPorfolio; 
	public $notaPhp;
	public $notaProyecto;
	public $nivel;
	const CARACTER = "Estudiante" ; 
	const NIVEL_P ="Niver Primario" ;
	const NIVEL_S ="Niver Secundario" ; 


 	public function __construct($dni,$nombre,$edad,$nacionalidad,$legajo,$nivel)
 	{
 		parent::__construct($dni,$nombre,$edad,$nacionalidad);//ahorro $this


 		$this->notaPorfolio=0.0;
 		$this->notaPhp=0.0;
 		$this->notaProyecto=0.0;
 		$this->legajo=$legajo;
 		$this->nivel=$nivel; 
 

 	}


 public function imprimir (){

 		echo 


 		"<table class= \"table\" >   
 		<thead> <h2> Datos Alumno<h2></thead>

 		<tbody>
 		<tr><td>Caracter</td><td>".self::CARACTER ."</td></tr>
 		<tr><td>Nombre</td><td>". $this->nombre."</td></tr> 
		<tr><td>Dni</td><td>". $this->dni."</td></tr> 
		<tr><td>Edad</td><td>".$this->edad."</td></tr>
		<tr><td>Nacionalidad</td><td>".$this->nacionalidad."</td></tr>
		<tr><td>Legajo</td><td>".$this->legajo."</td></tr>
		<tr><td>Nivel</td><td>".$this->nivel."</td></tr> 

		</tbody>
		</table>"  ;
		 
 		
 		
 }	


public function calcularPromedio($notaPorfolio,$notaPhp,$notaProyecto){


 	$promedio1 = $this->notaProyecto=$notaProyecto;  
 	$promedio2 = $this->notaPhp=$notaPhp;
 	$promedio3 = $this->notaPorfolio=$notaPorfolio;
 	$promedioTotal = ($promedio1+$promedio2+$promedio3)/3;
 

 		 echo // $this->notaPorfolio !== null   && $this->notaPhp !== null  && $this->notaProyecto !==  null ?  


 		"<table class= \"table\" >   
 		<thead> <h2> Promedio <h2></thead>

 		<tbody>
		<tr><td>Dni</td><td>". $this->dni."</td></tr> 
		<tr><td>Nombre</td><td>". $this->nombre."</td></tr>
		
		<tr><td>Nota Porfolio</td><td>".$this->notaPorfolio."</td></tr>
		<tr><td>Nota PHP</td><td>".$this->notaPhp."</td></tr>
		<tr><td>Nota Porfolio</td><td>".$this->notaProyecto."</td></tr>
		<tr><td>Nota Promedio</td><td>".  number_format($promedioTotal, 2, ',', ' ') ."</td></tr> 
		</tbody>
		</table>" ;  

 }





 } 

 
//---------------------------------  -------DOCENTE-----------------------
 
 class Docente extends Persona
 {
 	

 	public $especialidades = array(); 
 	public $materias;
 	//la constante necesita de una variable para ser accedida
 	const MATERIAS = "Exactas"; 
 	
 	public function imprimirEspecialidadesHabilitadas(){

 		
 		return implode(" , ", $this->especialidades );  
 		      

 	}


 	public function imprimir (){

 		echo 


 		"<table class= \"table\" >   
 		<thead> <h2> Datos Docente<h2></thead>

 		<tbody>
		<tr><td>Dni</td><td>". $this->dni."</td></tr> 
		<tr><td>Nombre</td><td>". $this->nombre."</td></tr>
		<tr><td>Edad</td><td>".$this->edad."</td></tr>
		<tr><td>Nacionalidad</td><td>".$this->nacionalidad."</td></tr>
		<tr><td>Especialidades</td><td>". $this->imprimirEspecialidadesHabilitadas() ."</td></tr> 
		</tbody>
		</table>" ;
 		
 		
 		



 	}

 	public function __construct($dni,$nombre,$edad,$nacionalidad)
 	{	
 		parent::__construct($dni,$nombre,$edad,$nacionalidad);//ahorro $this
 	}
 }


/*-------------------------------------------------------------------------------------------------------*/
// Objetos 


$alumno1= new Alumno("44556655","Pablo","18","Croata",110,Alumno::NIVEL_S);



$docente1 = new Docente ("12455655","Patricia","48","Croata");  
$docente2 = new Docente ("45666887", "Leon" , "22" , "Serbio"); 



 //print_r( $docente1->materias = Docente::MATERIAS);       
 



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Poo.php</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>


	<?php 
	//            echo $persona1->nombre;
	//echo $persona2->nombre;     

	?>
	<div class="container">

		<div class="col-6"> 

			<?php 




			 $alumno1->imprimir(); 

			 $alumno1->calcularPromedio(8,5,2);   


			 //$docente1->especialidades = ["Geografia", "Hostoria" ,"Lengua"]; 
			 //$docente1->imprimir();  
			 

			 
			  


			?>


		</div>


	</div>
	

	 
</body>
</html>