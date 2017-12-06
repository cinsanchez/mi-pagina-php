	<h2 class="second-title">Frases de libros</h2>
	<div class="libros-letras">
	<?php  	
		imprime_letras('libros');
	?>

	<br>
	<br>

	<ol class="lista-libros">
		<?php foreach($libros as $libro): ?>
			<li>
				<a href="index.php?controller=libros&id=<?= $libro['id_libros']; ?>">
					<?= $libro['nombre_libros']; ?>
				</a>
			</li>
		<?php endforeach; ?>
		
	</ol>
	</div>
