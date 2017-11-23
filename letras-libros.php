	<h2 class="second-title">Frases de libros</h2>
	<div class="libros-letras">

	<?php  	
			imprime_letras('libros');
			//require 'conexion.php';	
			
	?>

	<br>
	<br>

	<ol class="lista-libros">
		<?php 
			$database->titulos_libros_letra();
		 ?>

	</ol>
	</div>
