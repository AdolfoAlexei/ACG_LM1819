<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <?php
    if (isset($_REQUEST['error'])) {
        print "<p style='color: red'>$_REQUEST[error]</p>;"
    }
    ?>

    <form action="borrar.php" method="POST">

        <p>
            <label for="mail">Email</label>
            <input type="email" name="email" id="email">
        </p>
        <p>
            <input type="submit" value="Borrar">
        </p>
    </form>
</body>
</html>

nombre de la base de datos: bd.php
Dentro tendremos una tabla de ordenadores con idordenador(clave primaria), marca, procesador, memoria, perifericos(1 si tiene o 0 si no tiene), precio, fecha de cpmpra 
y ubicacion (clave foranea).

En ubicaciones debemos tener el idUbicacion, nombre, descripcion y localizacion(maps).