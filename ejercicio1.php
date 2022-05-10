<?php
echo "Ejercicio 1 <br>";


$numeros = array (1,2,3,4,5);

function array_inverso($num){
    $num_reves = array();
    $j =0;
    $lon = count($num);
    for($i=$lon-1; $i>=0; $i--){        
        echo $num[$i];
        $num_reves[$i]=$num[$i];
        $j++;
    }
    return $num_reves;
}

$num_al_reves = array_inverso($numeros);
//print_r($num_al_reves);

for($i=0; $i<count($num_al_reves);$i++){
    echo "<br><br>".$num_al_reves[$i]."<br>";
}