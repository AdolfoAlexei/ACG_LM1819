<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de multiplicar</title>
</head>
<body>

<?php
/* Imprime las tablas de multiplicar desde la 1 a la 10 */
for($tabla=1; $tabla<=10; $tabla++) //<-un ciclo de 10 (uno para cada tabla)
{
 echo "<h3>Tabla del $tabla </h3>";
 
 // generar tabla
 for($i=1; $i<=10; $i++) 
 {
  echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
 }
}
?>
</body>   
</html>