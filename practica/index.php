<?php
// SI ESXISTE - LEE EL ARCHIVO, SINO LO CREA DONDE GUARDA EN UNA VARIABLE SU CONTENIDO , LUEGO ESE CONTENIDO(JSON) LO TRANSFORMA EN UN ARRAY
// DESP PASA AL SEGUNDO IF
// Y POR ULTIMO PASA AL ELSE
//IF N°1
//EL TXT RECIBE LOS DATOS DEL $_POST
if (file_exists("lectura.txt")) {
	// 2-var guarda el conteido formato string
	$txtFile = file_get_contents( "lectura.txt") ;
	//!!!string -> array // FUENTE DEL FOREACH PARA SACAR LOS DATOS !!!!!

	$aDatos = json_decode($txtFile ,true); // no me convierte el JSON A ARRAY
}

	
	else {$aDatos[] = array();} 


			//$id = isset($_REQUEST["id"] )  &&  $_REQUEST["id"] >= 0? $_REQUEST["id"] : "" ;
	       // index.php?id=0 (cada hipervinculo tiene como target la $pos del array que emite el foreach )

		  // cada $pos = devuelve index.php?id=0 / index.php?id=1 ....... cada item tiene un ?id=0 

 				// id devuelta por la $pos
 	if ( isset($_REQUEST["id"]) && $_REQUEST["id"] >= 0 )  {
			
			// DEFINO ID = ANCHOR CLICKEADO	
			$id  = $_REQUEST["id"] ;
					
			}

			else {

				$id = "" ;
			} 

      
 	
	
//IF N°2
//SI HAY UN METODO $_ POST CREA EL ARRAY CON LOS DATOS DE LOS IMPUTS Y LO CONVIERTE A UN STRING EL CUAL VA A SER ALMACENADO EN UN ARCHIVO.TXT (JSON)
if ($_POST) {
	
	$nombre = trim( $_REQUEST["txtNombre"]) ;
	$apellido = trim ($_REQUEST["txtApellido"]);
	$dni = trim ($_REQUEST["txtDni"] ) ;
	


	//si no estan vacios los campos
	if (!empty($nombre) && !empty($apellido)  && !empty($dni) ) {


			// AL CLICKEAR EL BOTON SUBIR DEVUELVE UN ARRAY ASOSIATIVO: CON ESTA INFO ARMAMOS EL IF PARA OBTENER EL NOMBRE + EXTENSION Y GUARDAR IMAGEN EN LA CARPETA DESEADA
			if ($_FILES["btnSubir"]["error"] === UPLOAD_ERR_OK) {
			$nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000); // pone nombre aleatorio para unirla a la extencion luego
			$archivo_tmp = $_FILES["btnSubir"]["tmp_name"];	// entra al valor de la key tmp_name del array para sacar la ruta
			$nombreArchivo = $_FILES["btnSubir"]["name"];//entra al valor de la key name del array (nombre) para sacar la extencion luego
			$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);// le saca la extencion usando el nombre del archivo
			$nuevoNombre = "$nombreAleatorio.$extension"; // var nombreAleatorio + var  extencion
			move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");// de la ruta (carpeta archivo temp) a carpeta imagenes(con nuevo nombre)
			} // END IMG
		

			/*DEFINE ACCION*/
			if($id != "" ){


				$aDatos[$id] = array(
					'nombre' => $nombre ,
					'apellido' => $apellido ,
					'dni' => $dni ,
					'imagen' => $nuevoNombre,
					); 

				   //Si no se subio la imagen, mantengo el nombre actual que ya existía de la imagen
			         if ($_FILES["archivo"]["error"] !== UPLOAD_ERR_OK) {
			            $nuevoNombre = $aDatos[$id]["imagen"];
			         } else {
			            //Si viene la imagen, elimino la imagen anterior y guardo el nombre de la nueva imagen
			            unlink("imagenes/".$aDatos[$id]["imagen"]); //elimina un archivo
			         }



			}	else {

						$aDatos[] = array(
						'nombre' => $nombre ,
						'apellido' => $apellido ,
						'dni' => $dni ,
						'imagen' => $nuevoNombre,
						); 

					
						if ($_FILES["btnSubir"]["error"] === UPLOAD_ERR_OK) {
						$nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000); // pone nombre aleatorio para unirla a la extencion luego
						$archivo_tmp = $_FILES["btnSubir"]["tmp_name"];	// entra al valor de la key tmp_name del array para sacar la ruta
						$nombreArchivo = $_FILES["btnSubir"]["name"];//entra al valor de la key name del array (nombre) para sacar la extencion luego
						$extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);// le saca la extencion usando el nombre del archivo
						$nuevoNombre = "$nombreAleatorio.$extension"; // var nombreAleatorio + var  extencion
						move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");// de la ruta (carpeta archivo temp) a carpeta imagenes(con nuevo nombre)
						} // END IMG

					

					} // end else
				
			
			
			/*-- se subio imagen y se guardo en la carpeta / array creado y guardado como JSON EN TXT ---------*/
			/*  TODO EL CONTEDIO ESTA EN LA TABLA*/


			
			
				

			

		
			// array -> Json
			$arrayToJson = json_encode($aDatos);
			//Json -> txt file
			file_put_contents("lectura.txt", $arrayToJson);
			
			} // END EMPTY

			header('Location: index.php'); // no se guarda copia del formulario
}// END $_POST
		
	

//ELSE (SI NO OCURRE NINGUNO DE LOS DOS IFS)
print_r( "IMPRIMIR ARRAY DEL ARCHIVO.TXT(JSON) : " );
print_r( $aDatos );
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<style>
			
			body{
				display: flex;
				flex-wrap: wrap;
				padding: 2em;
			}
		
		</style>

		<script src="https://kit.fontawesome.com/5ba6711fce.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="col-12 mb-3"  style="text-align: center;" >
			<h1 >Formulario </h1>  
		</div>
		<!-- FORM -->
		<div class="col-6">
			<form  method="post" enctype="multipart/form-data" action="" >
				<div class="mb-3 w-75">
					<label for="txtNombre" class="form-label ">Nombre</label>		
																							
																			<!-- Determina si una variable está definida y no es null.
																									if($id != "" ){
																										$aDatos[$id] = array(
																										'nombre' => $nombre ,
																										'apellido' => $apellido ,
																										'dni' => $dni ,
																									'imagen' => $nuevoNombre,
																								); 
																										 -->	
					<input type="text" class="form-control"  name="txtNombre" value="<?php echo isset($aDatos[$id])? $aDatos[$id]["nombre"] : "" ; ?> ">													
					<div  class="form-text">Complete su nombre</div>
				</div>
				
				<div class="mb-3 w-75">
					<label for="txtApellido" class="form-label">Apellido</label>
					<input type="text" class="form-control" name="txtApellido" value="<?php echo isset($aDatos[$id])? $aDatos[$id]["apellido"] : "" ; ?> ">
					<div  class="form-text">Complete su Apellido</div>
				</div>
				<div class="mb-3 w-75">
					<label for="txtDni" class="form-label">DNI</label>
					<input type="text" class="form-control" name="txtDni" value="<?php echo isset($aDatos[$id])? $aDatos[$id]["dni"] : "" ; ?> ">
					<div  class="form-text">Complete su numero de  documento</div>
				</div>
				<div class="mb-3 w-75" >
					<!-- BOTON SUBIR-->
					<input type="file"  name="btnSubir"  >
					<div  class="form-text">Elegir imagen para subir</div>
					
				</div>
				<!-- BOTON GUARDAR-->
				<button type="bntSubmit" class="btn btn-primary" style="width: 75% ">Guardar</button>
			</form>
		</div>
		<!-- TABLE -->
		<div class="col-6">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">Imagen</th>
						<th scope="col">Nombre</th>
						<th scope="col">Apellido</th>
						<th scope="col">DNI</th>
						<th scope="col">Accion</th>
					</tr>
				</thead>
				<tbody>
					<!--FOREACH ESTA ACCEDIENTO A DATOS(DEL TXT) QUE ESTAN SIENDO TRANSFORMADOS A ARRAY POR LA CONDICION DEL IF(FILE_EXISTS){}
					-->
					<!-- SI EXISTE EL ARCHI.TXT HACE EL FOREACH-->
					<!-- SI ARRAY DISTINTO DE VACIO HACE EL FOREACH-->

					<?php if( !empty($aDatos))  foreach ($aDatos as $pos => $dato) : ?>
					

					<tr>
						<td> <img style="width:10em; height: 10em;" class="img-fluid" alt="Responsive image" src="imagenes/<?php echo @$dato["imagen"]; ?>">  </td>


						<td> <?php echo @$dato["nombre"];    ?> </td>
						<td> <?php echo @$dato["apellido"];  ?> </td>
						<td> <?php echo @$dato["dni"];       ?> </td>

						<td>  
							<a href="index.php?id=<?php echo $pos;?>"> <i class="far fa-edit"></i>   <!-- index.php? -->   </a>
							<a href=""> <i class="fas fa-trash-alt"></i> </a>  
						</td>
						
					</tr>
					
					
					<?php  endforeach ;  ?>
					
					
				</tbody>
			</table>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	</body>
</html>