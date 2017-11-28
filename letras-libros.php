	<h2 class="second-title">Frases de libros</h2>
	<div class="libros-letras">
	<?php  	
		imprime_letras('libros');
	?>

	<br>
	<br>

	<?php 
		$libros = [];
		if (isset($_GET['letra'])) {
			$libros = $libros_model->getTituloByLetra($_GET['letra']);
		}
	?>

	<ol class="lista-libros">
		<?php foreach($libros as $libro): ?>
			<li>
				<a href="libro.php?id=<?= $libro['id_libros']; ?>">
					<?= $libro['nombre_libros']; ?>
				</a>
			</li>
		<?php endforeach; ?>
		
	</ol>
	</div>
