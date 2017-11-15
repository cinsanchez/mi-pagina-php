<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adulterio</title>
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
		<span class="fourth-title"</span>"Adulterio"
	</p>

	<?php 
		imprime_frase_libro();
	 ?>

	<?php 
		require 'prologos.php';

		imprime_prologo_libro();
	 ?>

	</div>

	<div id="column-2" class="imagen-frase">
		<img src="adulterio_PC.jpg">
	</div>

	<div style="clear:both"></div>
	
	<?php require 'footer.php'; ?>
	
</body>
</html>