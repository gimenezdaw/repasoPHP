<html>
<head>
<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "contactos";        
    
    //CONECTAMOS CON LA bd
    $connectdb = new mysqli($servername, $username, $password, $dbname);
    
    //SI SE PRODUCE ERROR
    if ($connectdb->connect_error) {
        die("MySQL Connection failed: " . $connectdb->connect_error);
    }
    //DECLARAMOS EL QUERY
    $sql = "SELECT id, nombre, email, departamento FROM contactos";
    $result = $connectdb->query($sql);  
?>
</head>
<body>
<br />
<a href="index.php">menu</a>
<br />
<?php
if ($result->num_rows > 0) 
{
    ?>
    <table border="1">
    <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Departamento</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php print $row["id"] ?></td>
            <td><?php print $row["nombre"] ?></td>
            <td><?php print $row["email"] ?></td>
            <td><?php print $row["departamento"] ?></td>
        </tr>
    <?php } ?>
    </table>
    <?php
}
//CERRAMOS CONEXION
$connectdb->close();
?>
</body>
</html>