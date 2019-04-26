<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Borrar</title>
</head>
<body>

    <?php
    $autor = trim(htmlspecialchars($_REQUEST["autor"], ENT_QUOTES, "UTF-8"));
    $titulo = trim(htmlspecialchars($_REQUEST["titulo"], ENT_QUOTES, "UTF-8"));
    $categoria = trim(htmlspecialchars($_REQUEST["v"], ENT_QUOTES, "UTF-8"));
    $fecha = trim(htmlspecialchars($_REQUEST["fecha"], ENT_QUOTES, "UTF-8"));
    $texto = trim(htmlspecialchars($_REQUEST["texto"], ENT_QUOTES, "UTF-8"));

    $conexion = mysqli_connect("db4free.net:3306", "adminies", "Adminies", "cursophp")
        or die("Problemas de conexión");

        $registros = mysqli_query($conexion, "SELECT * FROM alumnos WHERE mail = '$mail'")
        or die("Problemas en la consulta.mysqli_error($conexion);

        if ($reg=mysqli_fecth_array($registros)) {
        
        } else {
            header("Location: inicio.php?error='Email no encontrado'");
        }

    mysqli_close($conexion);
    ?>
    
</body>
</html>

?>