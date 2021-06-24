<?php
//include_once("admclientes.php");
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
ini_set('error_reporting', E_ALL);
	
			
			

	// Si "archivo.txt" existe ->               // LEE JSON Y CONVIERTE A ARRAY (VACIO O NO);
	if (file_exists("archivo.txt")) {
			//lee archivo
			$jsonClientes = file_get_contents("archivo.txt") ;
			// JSON  ->  ARRAY
			$aClientes = json_decode($jsonClientes ,true);//(usar TRUE, sino se queda como objeto)
										//true = ARRAY asociativo
			
			
				}
			else {$aClientes =  array();}
/*-------------------------------------------------------------------------*/
				// BARRA URL (sale el ID)   /index.php?id=0	(KEY DEL ARRAY)   // DEVUELVE   // QUEDA VACIO
			$id = isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0? $_REQUEST["id"] : "";
					// hipervinculo(clickeado)
/*--------------------------------------$_POST------------------------------------------------*/
			if ($_POST ) { /* si hay POST*/
					//DECLARAMOS VARIABLES PARA LOS IMPUTS
					$dni = $_REQUEST["txtDni"];
					$nombre= $_REQUEST["txtNombre"];
					$telefono= $_REQUEST["txtTelefono"];
					$correo = $_REQUEST["txtCorreo"];
					//$archivo = $_FILES["archivo"];
				
				
			
					/*---------------------------ACTUALIZA ---------------------------------*/
				if ($id != "") { //index.php?id=1  en adelante  si esta seleccionado / seteado
					if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
					$nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
					$archivo_tmp = $_FILES["archivo"]["tmp_name"];
					$nombreArchivo = $_FILES["archivo"]["name"];
					$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
					$nuevoNombre = "$nombreAleatorio.$extension";
					move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
					}
						
						//Sobreescribe el ARRAY el $ID
						$aClientes[$id] = array (
						"dni" => $dni,
						"nombre" => $nombre,
						"telefono" => $telefono,
						"correo" => $correo,
						"archivo" => $nuevoNombre
						
					) ;
						} // END IF  $ID
						
		
						else {
						if ($_FILES["archivo"]["error"] === UPLOAD_ERR_OK) {
						$nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
						$archivo_tmp = $_FILES["archivo"]["tmp_name"];
						$nombreArchivo = $_FILES["archivo"]["name"];
						$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
						$nuevoNombre = "$nombreAleatorio.$extension";
						move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");
						}
					//Crea nuevo ARRAY
					$aClientes[] = array (
						"dni" => $dni,
						"nombre" => $nombre,
						"telefono" => $telefono,
						"correo" => $correo,
						"archivo" => $nuevoNombre
						
					) ;
							} //end else $id
					// ARRAY -> JASON
					$jsonClientes =  json_encode($aClientes);
					// GUARDA JSON en "archivo.txt"
					file_put_contents("archivo.txt", $jsonClientes);
					
				
			}// END POST

			//  ELIMINAR
				if( $id !=""  &&  isset($_REQUEST["do"]) && $_REQUEST["do"] == "eliminar"  ){
						unlink("imagenes/" . $aClientes[$id]["archivo"]);
						unset($aClientes[$id]);
						$jsonClientes =  json_encode($aClientes);
						file_put_contents("archivo.txt", $jsonClientes);
						header("Location: index.php");
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
		<script src="https://kit.fontawesome.com/5ba6711fce.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<style>
			main{
				display: flex;
				flex-wrap: wrap;
					} ;
		</style>
	</head>
	<body>
	<header style="text-align: center; padding: 2em"><h1>Registro de Clientes</h1></header>
	<main >
		
		
		<div>
			
			<form action=""   method="post" enctype="multipart/form-data" >
				
				
				<label for="txtDni">DNI: *</label>
				<input  class="form-control" type="text" name="txtDni" required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["dni"] : ""  ?> ">
				<label for="txtNombre">Nombre: *</label>
				<input class="form-control" type="text" name="txtNombre"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["nombre"] : ""  ?> ">
				<label for="txtTelefono">Telefono: </label>
				<input class="form-control" type="text" name="txtTelefono"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["telefono"] : ""  ?> ">
				<label for="txtCorreo">Correo: *</label>
				<input class="form-control" type="text" name="txtCorreo"  required value=" <?php echo isset($aClientes[$id])? $aClientes[$id]["correo"] : ""  ?> ">
				<!-- SUBIR IMAGEN -->
				<p>Adjuntar imagen <input type="file" name="archivo" accept=".jpg .jpeg, .png"  class="form-control-file"> </p>
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
					<?php print_r($aClientes);?>
					
					<!-- array     key(id)   value[" "] (array) -->
					<?php foreach ($aClientes as $pos => $cliente): ?>
					<tr>
						<td> <img src="imagenes/<?php echo $cliente["archivo"] ?>" alt="img" style="width:10em; height: 10em;"> </td>
						<td><?php echo $cliente["dni"];    ?></td>
						<td><?php echo $cliente["nombre"]; ?></td>
						<td><?php echo $cliente["correo"]; ?></td>
						<td><?php echo $cliente["telefono"]; ?></td>
						<!--Accion    se ejecuta sin el $_POST -->
						<td style="width: 110px;">
							<!-- Acceder al item del array (ej: index.php?id=0) -->
							<!-- $id = isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0? $_REQUEST["id"] : ""; -->
							<a href="index.php?id=<?php echo $pos;?>"> <i class="fas fa-edit"></i>  </a>
							<a href="index.php?id=<?php echo $pos; ?>&do=eliminar"> <i class="fas fa-trash-alt"></i> </a>
						</td>
					</tr>
					<?php endforeach;?>
					
					
				</tbody>
			</table>
			
		</div>
		<div style="text-align: right; flex-grow: 1; padding: 1.5em"><a href="index.php"><i class="fas fa-plus"></i></a></div>
	</main>
	
</body>
</html>