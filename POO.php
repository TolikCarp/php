<?php
class Persona
{
public $dni;
public $nombre;
public $nacionalidad;
public function imprimir(){}
	function __construct()
	{
		
	}
}//end class
class Alumno extends Persona
{
public $legajo;
public $notaPorfolio;
public $notaPhp;
public $notaProyecto;
public function calcularPromedio(){

echo "El promedio es ($notaProyecto + $notaPhp + $notaPorfolio)/3" ;
}
public function __construct()
		{	// toma de las variables public definidas arriba
		$this->notaPorfolio =0.0;
		$this->notaPhp = 0.0;
		$this->notaProyecto = 0.0 ;
	}
}//end class
class Docente extends Persona
{
	public $especialidad;
	public function imprimirEspecialidadesHabilitadas(){}
		function __construct()
	{
		
	}
}//end class

// Objetos

$alumno1 = new Alumno();
$alumno1-> legajo = 800;
$alumno1-> notaPorfolio = 8;
$alumno1-> notaPhp = 6;
$alumno1-> notaProyecto = 10;
$alumno1-> calcularPromedio();

$alumno2 = new Alumno();
$alumno2-> legajo = 801;
$alumno2-> notaPorfolio = 6;
$alumno2-> notaPhp = 7;
$alumno2-> notaProyecto = 5;

print_r($alumno1);
print_r($alumno2);




/*

public function imprimir(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Documento: " . $this->dni . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "Promedio: " . number_format($this->calcularPromedio(),2, ",", ".") . "<br>";
    }
    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
    }



*/


?>