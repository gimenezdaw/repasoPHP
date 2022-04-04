<?php
echo "Ejercicio 1 - b<br>";


$numeros = array (4,6,6,4);

function media($num){
   $lon = count($num);
   echo "Total números: ".$lon."<br>";
   $total = 0;

   for ($i=0; $i<$lon; $i++) {
    $total = $total + $num[$i];
   }

   echo "Total suma: ".$total;
   $resultado = $total / $lon;
   return $resultado;
}
$media = media($numeros);
print_r("<br>La media de los números es: ".$media);
?>