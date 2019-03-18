<?php


  echo "<center>";  
  echo "<br><br><br><br>";  

   $nombre=$_GET["nombre"];   
   $peso=$_GET["peso"];   
   $altura=$_GET["altura"];

   echo "<b>Tu nombre es:</b> $nombre";
   echo "<br><b>Tu peso es:</b> $peso kg
   <br><b>La Altura es:</b>  $altura"; 
     


   $IMC=($peso/($altura*$altura))*10000;  

   echo "<br><b>Tu IMC es:</b> ".$IMC;
 if ($IMC<18.5) { $ESCALA="BAJO PESO";} 
 if (($IMC>=18.5)&&($IMC<=24.9) ){ $ESCALA="NORMAL";}
 if (($IMC>=25)&&($IMC<=29.9) ){ $ESCALA="SOBREPESO";}
 if ($IMC>29.9){ $ESCALA="OBESIDAD";}
 
  echo "<br><b>Escala: </b>$ESCALA";   
  

  echo "</center>";

?>