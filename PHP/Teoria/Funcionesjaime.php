<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones</title>
</head>
<body>

    <?php
    function calculahipotenusa($cateto1, $cateto2) {
        $hipo = sqrt($cateto1*$cateto1 + $cateto2*$cateto2);
        return $hipo;
    }

    imprimir();

    function imprimir() {
        print "Hola";
    }

    $par1 = 12;
    $par2 = 16;
    $hipotenusa = calculahipotenusa($par1, $par2);
    print "<p>El triangulo de lados $par1 y $par2 tiene una hipotenusa de $hipotenusa</p>";
    ?>

    
</body>
</html>