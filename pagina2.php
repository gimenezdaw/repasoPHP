<html>
<head>
<title>Problema</title>
</head>
<body>
Debemos de obtener o guardar las variables que nos vienen de la
página1.php <br><br>

<a href="pagina3.php?user=<?php echo $_POST['usuario']?>&pass=<?php echo $_POST['clave']?>">Llamamos a la tercera página, enviando o guardando
el usuario y la clave</a>
</body>
</html>