<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de filosofos </title>

	<?php 
		require 'links.php';
		//require 'conexion.php';  
		require 'common.php';
	?>

</head>
<body>
	<?php require 'menu.php';
		  require 'letras-filosofos.php';
	?>

	<p class="titles"> 
	<b class="third-title">Filosofo: </b>

	<?php 	
		$database->imprime_nombre_autor();
	 ?>

	</p>

	<?php
		$database->imprime_frases_autores();
	?>
	
		<p class="titles"> 
			<b class="third-title">Libros</b>
		</p>

	<?php
		$database->imprime_imagen_libro_filosofo();
	 ?>

	<?php require 'footer.php'; ?>

</body>
</html>


	
