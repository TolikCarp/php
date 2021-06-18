<?php 
	
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

	

	 $aInvitados = array( "pepe" , "maca" , "juan");
	 


	 $aImagenes = scandir("imagenes") ;
	 unset($aImagenes[0]);
	 unset($aImagenes[1]);





	if ( isset($_POST["btnInvitado"])  ) {

			$nombre = $_REQUEST["txtNombre"]; 				
			$counter = array();
		
			for ($i=0; $i < count($aInvitados) ; $i++) { 
				
				if($aInvitados[$i] == $nombre){

					array_push($counter,$aInvitados[$i]) ;

				}

			} //ends for

			if ($_FILES["file"]["error"] === UPLOAD_ERR_OK) {
           			 $nombreAleatorio = date("Ymdhmsi") . rand(1000, 5000);
           			 $archivo_tmp = $_FILES["file"]["tmp_name"];
           			 $nombreArchivo = $_FILES["file"]["name"];
           			 $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);
           			 $nuevoNombre = "$nombreAleatorio.$extension";
           			 move_uploaded_file($archivo_tmp, "imagenes/$nuevoNombre");}


           	//--------------------------------------------------------------------------		 

			$usuario = json_encode($counter) ; //arra -> JSON
			$invitado = trim($usuario, '[""]' , );
	
			
			 if ( count($counter) > 0) {
				$mensaje= array( 

					"notificacion" => "Bienvenid@ $invitado",
					"estado" => "success",

				); 
			}



						

			else $mensaje= array( 

					"notificacion" => "No estas en la lista de invitados",
					"estado" => "danger",

				);  
		}//ENDS POST

/*-----------------------------------------------------------------------------------------------------*/			
			
			if( isset($_POST["btnVip"]) ){

			$nombre = $_REQUEST["txtNombre"]; 
	 		$clave = $_REQUEST["txtVip"];  
	 	    $verde = "verde" ;	


			 if(  in_array($nombre , $aInvitados) && $clave == $verde){

				$mensajeVip = array (

						"notificacion" => "Bienvenid@ ,toma tu pulsera VIP!!!",
						"estado" => "success"

				) ;

			  }

			 else if( in_array($nombre , $aInvitados) && $clave != $verde){

				$mensajeVip = array ( 

					"notificacion" => "Estas en la lista pero no sos VIP!!!" ,
					"estado" => "danger"
				 ) ;
			}

			  else if (!in_array($nombre , $aInvitados)  && $clave == $verde){

				
				$mensajeVip = array ( 

					"notificacion" => "Hola VIP , ingresa un nombre valido" ,
					"estado" => "danger"
				 ) ;
			  	
			  

			}

			 else if ( empty($nombre) && $clave != $verde){

			$mensajeVip = array ( 

					"notificacion" => "Completa los datos del formulario" ,
					"estado" => "danger"
				 ) ;

		   }


		}

		


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fiesta</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


	<style>

		form{
			width:  ;
			padding: 1.5em;
			 
			margin:1em;
		}

		input , label{ 
			margin:.5em;
			width: 
		}	

		h2{
			background:  #198754;;
			width:40%;
			margin: 1em;
			padding: .6em;
			border-radius: .1em;
			text-align: center;
			color:white;
			font-size: 2em 

		}

		h3{
			background: red;
			width:40%;
			margin: 1em;
			padding: .6em;
			border-radius: .1em;
			text-align: center;
			color:white;
			font-size: 2em 
		}

	</style>
</head>
<body>
	
	<main>
		
		<form action="" method="POST" enctype="multipart/form-data" >
			

				<h1 style="color:#2657C1; font-size:3.4em;"> Bienvenidos a la fiesta </h1>
				<h4>Completa el formulario </h4> <h4>Para VIP ingresa el nombre junto a la palabra clave</h4>

				<?php if ( isset($mensaje)) : ?>

				    <div class="col-12">

					<div class="alert alert-<?php echo $mensaje["estado"] ?>" role="alert">
  						<?php echo $mensaje["notificacion"]; ?>

					</div>


				   </div>	

			    <?php endif ; ?>

			    <?php if ( isset($mensajeVip)) : ?>

				    <div class="col-12">

					<div class="alert alert-<?php echo $mensajeVip["estado"] ?>" role="alert">
  						<?php echo $mensajeVip["notificacion"]; ?>

					</div>


				   </div>	

			    <?php endif ; ?>

			
					<div class="form-group">

						<label for="txtNombre">Nombre</label>
						<input type="text" class="form-control " name="txtNombre" style="width: 30%;">
						<input type="submit" class="btn btn-primary" name="btnInvitado" value="Invitado Regular">

						<!-- Cargar imagen  -->
						<input type="file"  name="file" accept=".jpg .jpeg, .png">

				    </div>



				


 					<div class="form-group">
									
						<label for="txtVip">Ingrese palabra secreta</label>
						<input type="password"  class="form-control" name="txtVip" style="width: 30%; ">
						<input type="submit"  class="btn btn-primary"  name="btnVip" value=" Sos VIP ?">

				    </div> 


				    <div class="col-12">
				    	
				    	<h2>Imagenes</h2>

				    	
				    	<table class="table">
				    			<thead>
				    			
				    			<th>Imagen</th>

				    			</thead>

				    			

				    			<tbody>

				    			<?php foreach ($aImagenes as $imagen) : ?>

				    				
				    			<tr>
				    				
				    	<td> <img src="imagenes/<?php echo $imagen ?>" alt="img" style="width:10em; height: 10em;"> </td>

				    			</tr>

				    			<?php  endforeach ; ?>



				    			</tbody>

				    			 
				    	</table>

				   

				    </div>
				


		</form>

		<aside style="width: 50%;">
			
			<div></div>

		</aside>


	</main>



</body>
</html>