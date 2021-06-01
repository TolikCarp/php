<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Calcular Iva</title>
</head>


	<?php 

	function (){

		$iva = $_REQUEST["txtIva"]; 
		$sinIva = $_REQUEST["txtPrecioSinIva"]; 
		$conIva = $_REQUEST["txtPrecioConIva"];

		

	}

		 ?>


<body>
	

<div style="display: flex; flex-direction: column; padding: 1em;">
	<div  style="text-align: center;"><h1>Calculadora IVA</h1></div>

	<div style="display: flex; ">


	


	<div  style="width: 50% ; padding: 2em "> 
		
		<form action="POST" style="display: flex; flex-direction: column;">   

		<label for="txtIva">IVA</label>
		<input type="text" name="txtIva">

		<label for="txtPrecioSinIva">Precio sin IVA</label>
		<input type="text" name="txtPrecioSinIva">

		<label for="txtPrecioConIva">Precio con IVA</label>
		<input type="text" name="txtPrecioConIva">
		<br>

		<input type="submit" class="btn btn-primary">

		</form>




	</div>




	<div style="width: 50%"> 


		<table class="table">
			
			<tr><td>IVA:</td></tr>
			<tr><td>Precio sin IVA:</td></tr>
			<tr><td>Precio con IVA:</td></tr>
			<tr><td>IVA cantidad:</td></tr>

		</table>


	</div>

</div>




</body>
</html>