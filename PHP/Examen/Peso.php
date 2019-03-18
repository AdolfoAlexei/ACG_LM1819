<?php

echo "<h3>Calculo de IMC</h3>";

echo "<form name='calculo_imc' action='calculopeso.php' method='GET'>";
echo "<b>Nombre:</b><input name='nombre' type='text'/>";
echo "<br><b>Peso:</b><input name='peso'  type='text'/>";
echo "<br><b>Altura:</b><input name='altura'  type='text'/>";
echo "<br><br><input type='submit' value='Calcular'/>";
echo "</form>";

?>
