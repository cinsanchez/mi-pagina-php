<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregando titulos</title>
</head>
<body>
	<h1>Agrega los libros </h1>

	<div align="left">
	<h1>Agrega tu libro</h1>
	<br>

	<form method="POST" action="agrega_libros2.php">
		Nombre del libro: <br>
	<textarea name="nombre_libros" id="nombre_libros" cols="30" rows="10" style="width: 500px; height: 70px"></textarea>
	<br>
		Epilogo: 
	<br>
	<textarea name="epilogo" id="epilogo" cols="30" rows="10" style="width: 500px; height: 200px"></textarea>
	<br>
		Autor: 
	<br>
	<textarea name="id_autor" id="id_autor" cols="30" rows="10" style="width:500px; height: 200px"></textarea>
	<br>
	<input type="submit" value="Agregar">

	</form>
	</div>
	
</body>
</html>