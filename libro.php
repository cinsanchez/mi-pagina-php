
	<?php require 'links.php';
		  //require 'conexion.php';
		  //require 'common.php';		  
	?>


		<?php foreach($nombre_libros as $libro): ?>	
			<span class="fourth-title"><?=$libro['nombre_libros'];?></span>
		<?php endforeach; ?>


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