<?php 

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('error_reporting', E_ALL); 


	// Si "archivo.txt" existe -> 
	// 1 - Leer y almacenar contenido(vendria ser un JSON) en un variable
	// 2 - Decodificar esa variable JSON -> ARRAY y guardar en otra variable

	      if (file_exists("archivo.txt")) {
			//leer archivo
			$clientesLectura = file_get_contents("archivo.txt") ;// variable que lee el contenido
  
			//converte el contenido de ese archivo: JSON OBJETO  ->  ARRAY
			$aClientes = json_decode($clientesLectura ,true);//(usar TRUE, sino se queda como objeto) 
			// IMPRIME ESTA VARIABLE			 	//true =  asociativo array

 
			
		}	else {$aClientes =  array() ;}

		

		if (isset($_POST["btnSubmit"])  ) {
		// 1ra condicion si el boton se seteo 
				//Array ( [name] => datos.png [type] => image/png [tmp_name] => C:\xampp\tmp\php41F9.tmp [error] => 0 [size] => 97495 )	
	 				
					// 2da condicion si el contenido esta completo

			

					$dni = $_REQUEST["txtDni"];
					$nombre= $_REQUEST["txtNombre"];
					$telefono= $_REQUEST["txtTelefono"];
					$correo = $_REQUEST["txtCorreo"];

					// img var 	




					 //Si se cumplen las dos condiciones creo un ARRAY para que sea convertido en JSON y se guarde en el archivo.txt

					 $aClientes[] = array (

					 	"dni" => $dni,
					 	"nombre" => $nombre,
					 	"telefono" => $telefono,
					 	"correo" => $correo,
					 	"imagen" => $imagen

					 ) ;



    





					 // ARRAY -> JASON 

					$aClientesJson =  json_encode($aClientes);

 


					 // guardar JSON en "archivo.txt"

					 file_put_contents("archivo.txt", $aClientesJson,); 





				

			



        }// ends submit


	
		

 ?>


