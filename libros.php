<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases por libros</title>

	<?php require 'links.php';?>

</head>
<body>
	<?php require 'menu.php';?>

	<?php require 'letras-libros.php';?>

	<div style="clear:both"></div>
	
	<ol class="lista-libros">		
		
		<?php
		$letra = $_GET['letra'];
		imprime_titulos_libros($_GET['letra']); ?>	
	</ol>
	
	<?php require 'footer.php';?>

</body>
</html>