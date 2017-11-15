<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de libros</title>

	<?php require 'links.php';
		  require 'conexion.php';
		  
	?>
</head>
<body>
	<?php require 'menu.php';
		  require 'letras-libros.php'; 
	?>

	<p class="titles">
		<b class="third-title">Libro: </b>
	
	<?php 	
		nombre_libro();
	 ?>
		
	</p>
	
	<?php 
		imprime_frase_idlibro();
		require 'prologos.php';
		imprime_prologo_libro();
	 ?>

</body>
</html>