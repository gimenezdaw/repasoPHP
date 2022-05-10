<a href = "listar_contactos.php"> Listar Contactos </a>

<form action="contact.php" method="post">
    Tu Nombre: <input type="text" id="name" name="name">
    Tu E-mail: <input type="email" id="email" name="email" required>
    Elije Departamento
    <select id="department" name="department" required>
        <option value="">Selecciona un Departamento</option>
        <option value="billing">Facturación</option>
        <option value="marketing">Marketing</option>
        <option value="technical-support">Soporte Técnico</option>
    </select>
    <button type="submit">Enviar Mensaje</button>
</form>

<?php
//VERIFICAMOS LOS DOS required que se hayan enviado
    if(isset($_POST['email']) && isset($_POST['department'])){
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "contactos";        
        //CONECTAMOS CON LA bd
        $connectdb = new mysqli($servername, $username, $password, $dbname);
        //SI SE PRODUCE ERROR
        if ($connectdb->connectdbect_error) {
            die("MySQL connectdbection failed: " . $connectdb->connectdbect_error);
        }
        //PREPARAMOS EL QUERY
        $stmt = $connectdb->prepare("INSERT INTO contactos(nombre, email, departamento) VALUES(?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $department);
        //PARA EVITAR INYECCION DE CODIGO
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        //EJECUTAMOS EN INSERT
        $stmt->execute();
        //CERRAMOS CONEXION
        $connectdb->close();
    }

?>