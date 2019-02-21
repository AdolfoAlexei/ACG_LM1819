<?php
$tempe = trim(htmlspecialchars($_REQUEST["temperatura"], ENT_QUOTES, "UTF-8"));
$unidad = trim(htmlspecialchars($_REQUEST["unidad"], ENT_QUOTES, "UTF-8"));

if (empty($tempe)) {
    print "<p>temperatura vacia</p>";
} else if (!is_numeric($tempe)) {
    print "<p>temperatura no numérica</p>";
} else if ($unidad == "c" && $tempe < -273.15) {
    print "<p>temperatura celsius incorrecta</p>";
} else if ($unidad == "f" && $tempe < -459.67) {
    print "<p>temperatura fahrenheit incorrecta</p>";
} else {
    if($unidad == "c") {
        $resFar = round(($tempe * 1.8) + 32, 2);
        print "<p>$tempe ºC son $resFar ºF</p>";
    } else {
        $resFar = round(($tempe * 1.8) + 32, 2);
        print "<p>$tempe ºC son $resFar ºF</p>";
    }
}

?>