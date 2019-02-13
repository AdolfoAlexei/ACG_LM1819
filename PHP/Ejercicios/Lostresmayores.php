<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Obtener los 3 mayores</title>
</head>
<body>

<?php 
$entrada=array(141,2,3,10,4,55,6,7,48,9);  
$salida = array();
$posaux = 0;
$salida[$posaux]=$entrada[$posaux];  


for($j=0;$j<count($entrada);$j++) {          
     
  if($salida[$posaux]>$entrada[$j])     
    $posaux++;       

  $salida[$posaux] = $entrada[$j];
    
} 

for($x=0;$x<3;$x++) echo $salida[$x]."<br>";

?> 

</body>
</html>