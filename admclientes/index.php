<?php 

//include_once("admclientes.php");

ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('error_reporting', E_ALL); 


	// Si "archivo.txt" existe -> 
	// 1 - Leer y almacenar contenido(vendria ser un JSON) en un variable
	// 2 - Decodificar esa variable JSON -> ARRAY 

			
			

	      if (file_exists("archivo.txt")) {
			//leer archivo
			$clientesLectura = file_get_contents("archivo.txt") ;// variable que lee el contenido
  
			//converte el contenido de ese archivo: JSON OBJETO  ->  ARRAY
			$aClientes = json_decode($clientesLectura ,true);//(usar TRUE, sino se queda como objeto) 
			// IMPRIME ESTA VARIABLE			 	//true =  asociativo array

 			
			
		}	else $aClientes =  array();

		

			$id = isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0? $_REQUEST["id"] : ""; 


			if ($_POST) {

					$dni = $_REQUEST["txtDni"];
					$nombre= $_REQUEST["txtNombre"];
					$telefono= $_REQUEST["txtTelefono"];
					$correo = $_REQUEST["txtCorreo"];

					//$archivo = $_FILES["file"];

			

					 $aClientes[] = array (

					 	"dni" => $dni,
					 	"nombre" => $nombre,
					 	"telefono" => $telefono,
					 	"correo" => $correo,
					 	//"archivo" => $archivo  
					 	

					 ) ;

					 // ARRAY -> JASON 

					$aClientesJson =  json_encode($aClientes);

 


					 // guardar JSON en "archivo.txt"

					 file_put_contents("archivo.txt", $aClientesJson,); 




					 /*if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
           			 $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
           			 $archivo_tmp = $_FILES["archivo"]["tmp_name"];
           			 $nombreArchivo = $_FILES["archivo"]["name"];
           			 $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
           			 $nuevoNombre = "$nombreAleatorio.$extension";
           			 move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
        	
			}*/
				

			}// ends post


			//print_r($aClientes);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AMB Clientes</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<link rel="stylesheet" href="css/estilos.css">



	<script src="https://kit.fontawesome.com/5ba6711fce.js" crossorigin="anonymous"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<header style="text-align: center; padding: 2em"><h1>Registro de Clientes</h1></header>

	<main>
		
		


		<div>
			
			<form action=""  method="post" enctype="multipart/form-data" >


				
				
				<label for="txtDni">DNI: *</label>
				<input  class="form-control" type="text" name="txtDni" required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["dni"] : ""  ?> ">

				<label for="txtNombre">Nombre: *</label>
				<input class="form-control" type="text" name="txtNombre"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["nombre"] : ""  ?> ">

				<label for="txtTelefono">Telefono: </label>
				<input class="form-control" type="text" name="txtTelefono"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["telefono"] : ""  ?> ">

				<label for="txtCorreo">Correo: *</label>
				<input class="form-control" type="text" name="txtCorreo"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["correo"] : ""  ?> ">


				<!-- SUBIR IMAGEN -->
				<p>Adjuntar imagen <input type="file" name="file" accept=".jpg .jpeg, .png" > </p>


				<p>Archivos admitidos .jpg .jpeg .png</p>
				
				<div>
					

					<!-- FINAL -->
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
					<th  class="table-light">Telefono</th>
					<th  class="table-light">Acciones</th>

				</thead>

				<tbody> 
						
					<?php foreach ($aClientes as $pos => $cliente): ?>

                        <tr>
                            <td><?php //echo $cliente["archivo"]; ?></td>
                            <td><?php echo $cliente["dni"]; ?></td>
                            <td><?php echo $cliente["nombre"]; ?></td>
                            <td><?php echo $cliente["correo"]; ?></td>
                            <td><?php echo $cliente["telefono"]; ?></td>
                            <!--Accion-->
                            <td style="width: 110px;">


                                <a href="index.php?id= <?php echo $pos; ?>"> <i class="fas fa-edit"></i>  </a>

                                <a href="index.php?id= <?php echo $pos; ?>&do=eliminar"> <i class="fas fa-trash-alt"></i> </a>

                            </td>
                        </tr>

                    <?php endforeach;?>

						

						 	



				</tbody>

			</table>

		</div>


	</main>

	
</body>
</html>