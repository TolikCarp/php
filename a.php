

<?php

	$aProductos = array("TV", "Radio", "Aire");

	echo "<table class='table'>";
	
	for ($i = 0; $i < count($aProductos); $i++ ){
    echo "<tr><td>" . $aProductos[$i] . "</td></tr>";
    }

    echo"</table>";
?>


<?php

	$array = array( "Radio", "Papel" );

	echo "<table>";

		for ($i=0; $i  < count($array); $i++) { 
			echo "<tr> <td>" . $array[$i] . "</td></tr>";
		}

	echo "</table>";

	

?>






