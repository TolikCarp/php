<?php 
	
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
ini_set('error_reporting', E_ALL);

	

	 $aInvitados = array( "pepe" , "maca" , "juan");

	 


	if (  isset($_POST["btnInvitado"]) ) {

			$nombre = $_REQUEST["txtNombre"]; 
	 		

			
				
			$counter = array();
		
			for ($i=0; $i < count($aInvitados) ; $i++) { 
				
				if($aInvitados[$i] == $nombre){

					array_push($counter,$aInvitados[$i]) ;

				}
				  

			} //ends for

			


			$usuario = json_encode($counter) ; //arra -> JSON
			$invitado = trim($usuario, '[""]' , );
	
			
				
			if ( count($counter) > 0) {
				echo " <h2> Bienvenid@ a la fiesta $invitado </h2>" ; 
			}

			

			else echo " <h3> No se encuentra en la lista de invitados </h3>" ;  
		}//ENDS POST

/*---------------------------------------------------------------------------*/			
			
			if( isset($_POST["btnVip"]) ){

			$nombre = $_REQUEST["txtNombre"]; 
	 		$clave = $_REQUEST["txtVip"];  
	 	    $verde = "verde" ;	


				 if( $clave == $verde){

				echo " <h2> Aqui tiene su pulsera VIP!!! </h2>" ;

			  }

			  	else echo "<h3> Ud. no es VIP</h3>";


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
			width: 35% ;
			padding: 1.5em;
			 
			margin:1em;
		}

		input , label{ 
			margin:.5em;
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
		
		<form action="" method="POST">
			

				<h1 style="color:#2657C1; font-size:3.4em;"> Bienvenidos a la fiesta </h1>
				<h4>Completa el formulario</h4>

			
					<div class="form-group">

						<label for="txtNombre">Nombre</label>
						<input type="text" class="form-control" name="txtNombre">
						<input type="submit" class="btn btn-primary" name="btnInvitado">

				    </div>

 


 					<div class="form-group">
									
						<label for="txtVip">Ingrese palabra secreta</label>
						<input type="password"  class="form-control" name="txtVip">
						<input type="submit" class="btn btn-primary"  name="btnVip">

				    </div> 
				


		</form>


	</main>



</body>
</html>