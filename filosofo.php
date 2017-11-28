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
		$filosofos=[];
		if (isset($_GET['id'])) {
			$filosofos = $filosofos_model->getNombreById($_GET['id']);
		}

		$frases = [];
		if (isset($_GET['id'])) {
			$frases = $frases_model->getByIdFilosofos($_GET['id']);
		}

		$imagenes = [];
		if (isset($_GET['id'])) {
			$imagenes = $filosofos_model->getImagenById($_GET['id']);
		}
	 ?>

		<?php foreach($filosofos as $filosofo): ?>
			<span class="fourth-title>">
				<?= $filosofo['nombre_autor']; ?>
			</span>
		<?php endforeach; ?>
	
	</p>

		<?php foreach($frases as $frase): ?>
			<div class="phrase"><?= $frase['frase_desc'];?></div>
		<?php endforeach; ?>
		
		<p class="titles"> 
			<b class="third-title">Libros</b>
		</p>

		 <?php foreach($imagenes as $imagen): ?>
			<div class="imagen-prologo">
				<img src="<?= $imagen['imagen_url']; ?>" height="350" width="270">
			</div>
		 <?php endforeach; ?>

	<?php require 'footer.php'; ?>

</body>
</html>


	
