	<h2 class="second-title">Frases de libros</h2>
	<div class="libros-letras">

	<?php  	
			imprime_letras('libros');
			require 'conexion.php';	
	?>

	<br>
	<br>

	<ol class="lista-libros">
		<?php 
			imprime_titulos_libros();
		 ?>

	</ol>
	</div>
