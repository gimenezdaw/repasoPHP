<?php
$fd=fopen ("contador.txt", "r");
//a == add to the end      w -> crea el fichero nuevo      r -> read
while (!feof ($fd)){
    //mientras que no sea final de fichero
    $linea=fgets($fd);
    echo $linea. "<br>";
}
fclose($fd);
?>