<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 01</title>
    <style>
    .rojo {
        color: red; 
    }
    .azul {
        color=azul;
    }
    .verde {
        color=verde;
    }

    
    </style>
</head>
<body>
<?php
      $numero=rand(1,10);
      echo $numero ;
      if ($numero < 5) {
        echo '<p class="rojo">El valor es menor que 5</p>'
    } elseif ($numero > 5 ) {
        echo '<p class="azul">El valor es mayor que 5</p>'
    } else ($numero = 5) {
        echo '<p class="verde">El valor es igual a 5</p>';

    ?>
</body>
</html>



