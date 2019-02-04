<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estructura</title>
</head>
<body>

<?php
for ($i=0; $i < 6; $i = $i + 2) {   //El bucle iria de dos en dos
    print "$i\n";
}
?>  
</br></br>
<?php
for ($i=6; $i >= 0; $i--) {   //El blucle iria del 6 al 0
    print "$i\n";
}
?>


<?php
for ($i=6; $i >= 0; $i--) {   // Muestra el 6, 4, 2 y 0.
    if ($i % 2 == 0) {
    print "<p>$i</>";
    }
}
?>

<?php
$contador = 0;
for ($i=6; $i >= 0; $i--) {   // Contador de numeros impares entre 6 y 0
    if ($i % 2 == 0) {
        print "<p>$i</p>";
    } else {
        $contador++;
    }
}
echo "Hay $contador impares entre 6 y 0";
?>
</br></br></br>


<?php
$columnas = 4;
$filas    = 3;

print "<table border=\"1\">\n";            // Abre la tabla
print "  <caption>Tabla</caption>\n";      // Crea la leyenda <caption>
print "  <tbody>\n";                       // Abre el cuerpo de tabla <tbody>

print "    <tr>\n";                        // Abre la primera fila
print "      <th></th>\n";                 // Crea la primera celda <th> de la primera fila (sin número)
for ($j = 1; $j <= $columnas; $j++) {      // Bucle 1 se ejecuta tantas veces como columnas tenga la tabla
    print "      <th>$j</th>\n";           // Crea las celdas <th> de la primera fila (con número)
}
print "    </tr>\n";                       // Cierra la primera fila

for ($i = 1; $i <= $filas; $i++) {         // Bucle 2 (genera el resto de filas de la tabla)
    print "    <tr>\n";                    // Abre la fila
    print "      <th>$i</th>\n";           // Crea la primera celda <th> de cada fila (con número)
    for ($j = 1; $j <= $columnas; $j++) {  // Bucle 3 se ejecuta tantas veces como columnas tenga la tabla
        print "      <td>$i-$j</td>\n";     // Crea el resto de celdas <td> de cada fila (con números)
    }
    print "    </tr>\n";                   // Cierra la fila
}

print "  </tbody>\n";                      // Cierra el cuerpo de tabla <tbody>
print "</table>\n";                        // Cierra la tabla
?>




    
</body>
</html>