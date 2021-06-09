<?php 

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('error_reporting', E_ALL); 


	//  SI  FILE EXISTS SE ANTEPONE SE AÑADEN LOS REGISTROS . SI SE PONE AL FINAL SE AÑADE UNO SOLO (DE A UNO) 
		if (file_exists("archivo.txt")) {
			//leer archivo
			$clientesLectura = file_get_contents("archivo.txt") ;// variable que lee el contenido

			//convertir json a un array clientes
			$aClientes = json_decode($clientesLectura ,true);//variable que transforma JSON a array (con el tru sino se queda como objeto) 
													//true = array asociativo array 
 
			
		}

		
	

		if(!empty($_POST["txtDni"] )){

			$dni = $_REQUEST["txtDni"];
			$nombre= $_REQUEST["txtNombre"];
			$telefono= $_REQUEST["txtTelefono"];
			$correo = $_REQUEST["txtCorreo"];

			 //CREAR ARRAY 

			 $aClientes[] = array (

			 	"dni" => $dni,
			 	"nombre" => $nombre,
			 	"telefono" => $telefono,
			 	"correo" => $correo 

			 ) ;


			 //convertir array  arriba en  JSON

			$aJason =  json_encode($aClientes);




			 // guardar jason en archivo txt

			 file_put_contents("archivo.txt", $aJason);

		}


	
		

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMB Clientes</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">

</head>
<body>
	<header style="text-align: center; padding: 2em"><h1>Registro de Clientes</h1></header>

	<main>
		
		


		<div>
			
			<form action=""  method="post" enctype="multipart/form-data" >
				
				<label for="txtDni">DNI: *</label>
				<input  class="form-control" type="text" name="txtDni">

				<label for="txtNombre">Nombre: *</label>
				<input class="form-control" type="text" name="txtNombre">

				<label for="txtTelefono">Telefono: </label>
				<input class="form-control" type="text" name="txtTelefono">

				<label for="txtCorreo">Correo: *</label>
				<input class="form-control" type="text" name="txtCorreo">



				<p>Archivo adjunto <button class="btn btn-dark" type="input" name="btnArchivo">Seleccionar archivo </button> <span>No se eligio archivo</span> </p>
				<p>Archivos admitidos .jpg .jpeg .png</p>
				<div   >
				<button type="submit" name="btnSubmit" class="btn btn-primary"> Guardar</button>
				</div>

			</form>


		</div>


		<div>
			
			<table class="table" style="text-align: center;">
				
				<thead>
					
					<th  class="table-light">Imagenes</th>
					<th  class="table-light">DNI</th>
					<th  class="table-light">Nombre</th>
					<th  class="table-light">Correo</th>
					<th  class="table-light">Acciones</th>

				</thead>

				<tbody>
						
						<?php 

						
								
							for ($i=0; $i < count($aClientes); $i++) { 
								echo "<tr><td>". $aClientes[$i]["dni"]  ."</td>
										<td>" . $aClientes[$i]["nombre"]  ."</td>
										<td>" . $aClientes[$i]["telefono"]  ."</td>
										<td>" . $aClientes[$i]["correo"]  ."</td>


								</tr>"; 

							}

						 ?>


				</tbody>

			</table>

		</div>


	</main>

	
</body>
</html>