<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de filosofos </title>

	<?php require 'links.php';
		  require 'conexion.php';
		  
	?>

</head>
<body>
	<?php require 'menu.php';
		  require 'letras-filosofos.php';
	?>

	<p class="titles"> 
		<b class="third-title">Filosofo: </b>

	<?php 	
		imprime_titulo_autor();
	 ?>

	</p>

	<?php
		imprime_frase_libro();
		
	?>
	
		<p class="titles"> 
			<b class="third-title">Libros</b>
		</p>

	<?php
		imprime_imagen_libro();
	 ?>

	<?php require 'footer.php'; ?>

</body>
</html>


	
