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
		$nombre_libros = [];
		if (isset($_GET['id'])) {
			$nombre_libros = $libros_model->getById($_GET['id']);
		}

		$frase_libros = [];
		if (isset($_GET['id'])) {
			$frase_libros = $frases_model->getByIdLibro($_GET['id']);
		}

		$imagen_libros = [];
		if (isset($_GET['id'])) {
			$imagen_libros = $libros_model->getImagenById($_GET['id']);	
		}

		$prologo_libros = [];
		if (isset($_GET['id'])){
			$prologo_libros = $libros_model->getById($_GET['id']);
		}			
	 ?>
		<?php foreach($nombre_libros as $libro): ?>	
			<span class="fourth-title"><?=$libro['nombre_libros'];?></span>
		<?php endforeach; ?>

	</p>

	 <?php foreach($frase_libros as $frase_libro): ?>
		<div class="phrase"><?=$frase_libro['frase_desc'];?></div>
	 <?php endforeach; ?>	

	<?php require 'prologos.php';?>	

	<?php foreach($prologo_libros as $prologo_libro): ?>
		<p><?=$prologo_libro['epilogo'];?></p>
	<?php endforeach; ?>

	<?php foreach($imagen_libros as $imagen_libro): ?>
		<div class="imagen-prologo">
			<img src="<?= $imagen_libro['imagen_url']; ?>" height="350" width="270">
		</div>
	<?php endforeach; ?>

</body>
</html>