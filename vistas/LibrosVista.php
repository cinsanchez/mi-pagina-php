<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de libros</title>

	<?php require 'vistas/LinksVista.php';?>

</head>
<body>
	<?php require 'vistas/MenuVista.php';
	?>

	<p class="titles">
		<b class="third-title">Libro: </b>
	

		<?php foreach($nombre_libros as $libro): ?>	
			<span class="fourth-title"><?=$libro['nombre_libros'];?></span>
		<?php endforeach; ?>

	</p>

	 <?php foreach($frase_libros as $frase_libro): ?>
		<div class="phrase"><?=$frase_libro['frase_desc'];?></div>
	 <?php endforeach; ?>	

	<?php require 'vistas/PrologoVista.php';?>	

	<?php foreach($prologo_libros as $prologo_libro): ?>
		<p><?=$prologo_libro['epilogo'];?></p>
	<?php endforeach; ?>

	<?php foreach($imagen_libros as $imagen_libro): ?>
		<div class="imagen-prologo">
			<img src="<?= $imagen_libro['imagen_url']; ?>" height="350" width="270">
		</div>
	<?php endforeach; ?>

	<?php require 'vistas/FooterVista.php'; ?>

</body>
</html>