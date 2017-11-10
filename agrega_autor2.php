<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Autor agregado</title>
</head>
<body>
	<h1>Agrega los autores </h1>
	
	<?php 
		$nombre_autor = $_POST['nombre_autor'];

		require 'conexion.php';

		mysqli_query($conexion, "INSERT INTO autor (nombre_autor) VALUES ('$nombre_autor')");

	 ?>
	
	<h3>Autor agregado!</h3>
	<div align="center"><a href="filosofos.php">Ver lista de filosofos</a></div>

</body>
</html>