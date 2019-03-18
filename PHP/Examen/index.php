<?php
include "figuras.php";
$objfigura = new figuras();

echo "<form action='index.php' method='POST' name='formu'>
    <table border=1>
        <tr><td colspan=2 align='center'><b>Calcular area</b></td></tr>
        <tr>
            <td align='right'>Selecciona la figura:</td>
            <td>  
            <select name='figura'>
                    <option value=1>Rectangulo</option>
                </select>
        </td>
        </tr>
        <tr>
        <td align='right'>Base</td>
        <td><input type='text' name='base'></td>
        </tr>

        <tr>
        <td align='right'>Altura</td>
        <td><input type='text' name='altura'></td>
        </tr>

        <tr>
        <td align='right'>Calcular</td>
        <td>
            <select name='calcular'>
            <option value=1>Area</option>
            <option value=2>Perimetro</option>
            </select>
        </td>
        </tr>
        <tr>
        <td colspan=2 align='center'> 
            <input type='submit' name='calcular' value='calcular'>
        </td>
        </tr>
        </table>
        </form>";
        if (!empty($_POST['calcular']))
        {
            if ($_REQUEST['figura'] == 1)
            {
                $objfigura ->rectangulo($_REQUEST['base'], $_REQUEST['altura'], $_REQUEST['calcular']);
            }
        }

        ?>

        

