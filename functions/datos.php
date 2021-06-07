
<?php 


	//Write
	$archivo = fopen("prueba.txt","w") ;   
	fwrite($archivo, "Prueba.php : Estoy escribiendo y ademas estoy leyendo con PHP  el archivo prueba.txt !!!"); 
	fclose($archivo);

	$pagina = fopen("datos.txt", "w");
	fwrite($pagina, "Datos.txt : estoy accedianto a la lectura de los dos !!! ");
	fclose($pagina);  


	//Read
	$archivo = fopen("prueba.txt", "r"); //  reading
	$size = filesize( "prueba.txt");
	$a = fread($archivo, $size); // variables
	fclose($archivo);
      
    print_r($a);  

    //Read (fopen -> fread -> fclose)   

	$b = file_get_contents("datos.txt");  // reading 

	print_r($b);

	   
	
	// Just read the file
	$contenido = file_get_contents("datos.txt") ;// equivale a la lectura de datos.txt
	
	// simple variable that adds a chat 
	$contenido .= "y ademas agrego esta segunda linea con file_get_contents a datos.txt " ; 


	// Write (fopen -> fread -> fclose)
					//(file name	- variable );	
	file_put_contents( "datos.txt", $contenido); 

	print_r($contenido);  
  





 
 

 




?>
