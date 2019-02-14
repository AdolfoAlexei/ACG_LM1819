
<?php

$info = new SplFileInfo('comida.txt');
var_dump($info->getExtension());

$info = new SplFileInfo('photo.jpg');
var_dump($info->getExtension());

$info = new SplFileInfo('algo.gz');
var_dump($info->getExtension());

?>
