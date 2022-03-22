<?php
$filas = array(
array(
'nombre' => 'Antonio', 'apellidos' => 'Gómez Gómez', 'telefono' => '675832145'),
array(
'nombre' => 'Pedro', 'apellidos' => 'Guillén Gastón', 'telefono' => '674562178'),
array(
'nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '689765432'),
array(
'nombre' => 'Rubén', 'apellidos' => 'Guardia Jurado', 'telefono' => '654213896')
);

echo "<table border='1'>";
foreach($filas as $fila){
echo "<tr>";
echo "<td>".$fila['nombre']."</td>";
echo "<td>".$fila['apellidos']."</td>";
echo "<td>".$fila['telefono']."</td>";

echo "</tr>";
}
echo "</table>";
?>