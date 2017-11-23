<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de libros</title>

	<?php require 'links.php';
		  //require 'conexion.php';
		  require 'common.php';		  
	?>
</head>
<body>
	<?php require 'menu.php';
		  require 'letras-libros.php'; 
	?>

	<p class="titles">
		<b class="third-title">Libro: </b>
	
	<?php 	
		$database->imprime_titulo_libros();
	 ?>
		
	</p>
	
	<?php 
		$database->imprime_frases_libros();
		require 'prologos.php';
		$database->imprime_prologo_libro();
		$database->imprime_imagen_libro()
	 ?>

</body>
</html>