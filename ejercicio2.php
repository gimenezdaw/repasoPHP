<?php
    function copiarArchivo($file1, $file2){
        $source = fopen($file1, "r");
        $dest = fopen($file2, "w");
        while (!feof($source)) {
            $linea = fgets($source);
            fputs($dest, $linea);
        }
        fclose($source);
        fclose($dest);
    }
    copiarArchivo("source.txt", "dest.txt");
   
?>