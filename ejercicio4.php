<?php
$fd=fopen ("contador.txt", "a");
//a == add to the end      w -> crea el fichero nuevo
fputs($fd, "linea1");
fputs($fd, "\n");
fputs($fd, "linea2");
fputs($fd, "\n");
fputs($fd, "linea3");

fclose($fd);
?>