<?php
class figuras
{
    public function rectangulo($base,$altura,$calcular)
    {
        if($calcular == 1)
        {
            $area = ($base * $altura)/2;
            echo "El area del rectangulo es. $area";
        }
        else 
        {
            $perimetro = (($base + $altura)*2;
            echo "El perimetro del rectangulo es. $perimetro";
        }
    }
}
?>