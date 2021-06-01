<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


<?php 

	
	function calcularNeto($sueldoBruto){

	$neto = $sueldoBruto - ($sueldoBruto * 0.17);


		return $neto; 

	}

	echo "El sueldo neto es de" . calcularNeto(20000) ; 



 ?>

	
</body>
</html>