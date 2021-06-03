<?php 

$importe = 220000.6500  ;  
 
 number_format($importe, 2,  "," ,  "." ) ; 

     

$number = 20000;

 number_format($number , 2 , "," , "."); 


$fecha = "22-05-2019";

echo date_format(date_create($fecha), "Y/d/m");       
 


 ?>