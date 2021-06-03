<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<title>Calcular Iva</title>


<?php
 
	 

	 		$a=0;
	 		$b=0;
	 		$c= 0;
	 		$d=0;

 			$iva = $_REQUEST["txtIva"];
			$sinIva = $_REQUEST["txtPrecioSinIva"];
			$conIva = $_REQUEST["txtPrecioConIva"];

			

		if(isset($_REQUEST['boton'])){



			if ($iva != null && $sinIva > 0 ) {
				   $a = $sinIva - ($sinIva*$iva)/100 ;
				}



		     else if ($iva != null && $conIva > 0 ) {
					$b =  $conIva + ($conIva*$iva)/100 ;
				}
 		



			
		}
	

	
 


		 ?>
	


</head>





<body>
	

<div style=" display: flex; flex-direction: column; padding: 1em;">
	<div  style="text-align: center;"><h1>Calculadora IVA</h1></div>

	<div style="display: flex; width:100%;justify-content: space-between; ">


	


	<div  style="width: 50% ;  display:flex; justify-content: center;  padding-top:10em; "> 
		
		<form action="calcular_iva.php"  method="post" style="display: flex; flex-direction: column;">   

		<label for="txtIva">IVA</label>
		<input type="text" name="txtIva">

		<label for="txtPrecioSinIva">Precio sin IVA</label>
		<input type="text" name="txtPrecioSinIva">

		<label for="txtPrecioConIva">Precio con IVA</label>
		<input type="text" name="txtPrecioConIva">
		<br>

		<input type="submit" name="boton" class="btn btn-primary">

		</form>




	</div>


	

	<div style="width:50% ;"> 

	
		<table class="table">
			
			<tr><td>IVA %:</td>  <td><?php echo $iva  ?> </td>   </tr>
			<tr><td>Precio sin IVA:</td>  <td name="a"><?php echo $a ;?></td>  </tr>
			<tr><td >Precio con IVA:</td>  <td name="b"><?php echo $b ;?></td>  </tr>
			<tr><td>IVA cantidad:</td>  <td> <?php echo $c ?> </td>  echo   </tr>

		</table>


	</div>

</div>




</body>
</html>

	

	

 