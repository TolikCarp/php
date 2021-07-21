<?php
date_default_timezone_set('UTC');

class Persona
{
	protected $dni;
	protected $nombre;
	protected $correo;
	protected $celular;

	public function __get($propiedad){
			return $this->$propiedad ;
		}
	public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}
	

	public function __construct($dni,$nombre,$correo,$celular)
	{
		
		$this->dni = $dni;
		$this->nombre = $nombre;
		$this->correo = $correo;
		$this->celular = $celular;
	}
}
/**
*          ----------------- ALUMNO--------------------
*/
class Alumno extends Persona
{
	private $fechaNac;
	private $peso;
	private $altura;
	private $aptoFisico;
	private $presentismo; 
	
	
	public function __construct($dni,$nombre,$correo,$celular,$fechaNac)
	{
		parent::__construct($dni,$nombre,$correo,$celular);
		$this->aptoFisico = false;
		$this->presentismo = 0.0;
		$this->peso =0.0;
		$this->altura=0.0;
		$this->fechaNac = $fechaNac;
	}
					 //alumuno1 = setFichaMedica(90,180,true);
					//alumuno2 = setFichaMedica(80,170,fase);
	public function setFichaMedica($peso,$altura,$aptoFisico)
		{
			
			$this->peso = $peso;
			$this->altura = $altura;
			$this->aptoFisico = $aptoFisico;
		}


		public function __get($propiedad){
			return $this->$propiedad ;
		}
	public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}

}
/**
			* 			----------------ENTRENADOR---------------
*/
class Entrenador extends Persona
{
	
private $aClases ;
	
//constructor universal es para inicializar
	public function __construct($dni,$nombre,$correo,$celular)
		{
		//AHORRA EL THIS
		parent::__construct($dni,$nombre,$correo,$celular);
		$this->aClases = array();
	}


public function __get($propiedad){
			return $this->$propiedad ;
		}
	public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}


}
/**
				* 				--------------CLASE-----------
*/
class Clase
{
	//inicializo variables
	
	private $nombre;//str
	private $entrenador;//obj
	private $aAlumnos = array();

	/*public function __toString(){
	return $this->entrenador ;
} */
public function asignarEntrenador($entrenador){
		$this->entrenador=$entrenador; //asigna
}
public function inscribirAlumno($alumno){
		$this->aAlumnos[]=$alumno ; //apila
}
public function imprimirListado(){


	
	foreach ($this->aAlumnos as $pos => $objeto) {
				
	$objeto->aptoFisico? $objeto->aptoFisico = "Presentado":  $objeto->aptoFisico = "Pendiente" ;

	$fecha = date("d-m-Y", strtotime($objeto->fechaNac));  

	echo 

	"<div class=\"container\"> 

		<div class=\"col-6\">
	    	<table class=\"table\">

	    		<thead> 


	 			<th> Clase: " . $this->nombre . " <br> Entrenador a cargo: " . $this->entrenador->nombre .  "</th>

			   

	    		</thead>

				<tbody> 
				<tr> <td><h4>Ficha del alumno : $objeto->nombre </h4></td></tr>

				<tr> <td>Nombre</td><td>" . $objeto->nombre ."</td> </tr>

				<tr> <td>Dni</td> <td>" . $objeto->dni ."</td> </tr>

				<tr> <td>Correo</td> <td>" . $objeto->correo ."</td> </tr>

				<tr> <td>Celular</td> <td>" . $objeto->celular ."</td> </tr>

				<tr> <td>Presentismo</td> <td>" . $objeto->presentismo ."</td> </tr>

				<tr> <td>Apto Fisico</td> <td>" . $objeto->aptoFisico ."</td> </tr>

				<tr> <td>Altura</td> <td> " . $objeto->altura ."</td> </tr>

				<tr> <td>Peso</td> <td> " . $objeto->peso ."</td> </tr>
				
				<tr> <td>Fecha de Nacimiento</td> <td> " .  $fecha ." </td> </tr>
				</tbody>


		</div>		
		    </table>
	</div>"	

		; 
	}
	
}

public function __get($propiedad){
			return $this->$propiedad ;
		}
	public function __set($propiedad,$valor){
			$this->$propiedad =$valor;
		}
}
//Desarrollo del programa
$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@mail.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "andrea@mail.com", "11768654");
$alumno1 = new Alumno("40787657", "Dante Montera", "dante@mail.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica(90, 178, true);
$alumno1->presentismo = 78;
$alumno2 = new Alumno("46766547", "Darío Turchi", "dante@mail.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica(73, 1.68, false);
$alumno2->presentismo = 68;
$alumno3 = new Alumno("39765454", "Facundo Fagnano", "facundo@mail.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica(90, 1.87, true);
$alumno3->presentismo = 88;
$alumno4 = new Alumno("41687536", "Gastón Aguilar", "gaston@mail.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica(70, 1.69, false);
$alumno4->presentismo = 98;
$clase1 = new Clase();
$clase1->nombre = "Funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();
$clase2 = new Clase();
$clase2->nombre = "Zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<title>GYM</title>
	</head>
	<body>
		
		
	</body>
</html>