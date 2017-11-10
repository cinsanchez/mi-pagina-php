<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregando titulos</title>
</head>
<body>
	<h1>Agrega los libros </h1>
	
	<?php 
		$nombre_libros = $_POST['nombre_libros'];
		$epilogo = $_POST['epilogo'];
		$id_autor = $_POST['id_autor'];

		require 'conexion.php';

		mysqli_query($conexion, "INSERT INTO libros (nombre_libros, epilogo, id_autor) VALUES ('$nombre_libros', '$epilogo', '$id_autor')");

	 ?>

	
</body>
</html>