
<?php

$info = new SplFileInfo('comida.txt');
var_dump($info->getExtension());

$info = new SplFileInfo('photo.jpg');
var_dump($info->getExtension());

$info = new SplFileInfo('algo.gz');
var_dump($info->getExtension());

?>

<?php
 
 function calcularextension($fichero) {
     $nombreextension = explode(".", $fichero);
     return strtoupper($nombreextension[1]);
 }

 $nombrefichero = "fichero.txt";
 $ext = calcularextension($nombrefichero);
 print "<p>La extension del archivo $nombrefichero es $ext</p>";

?>


