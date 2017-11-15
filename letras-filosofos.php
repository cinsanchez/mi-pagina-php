	<h2 class="second-title">Frases por filosofos</h2>
	<div class="filosofos-letras">

	<?php  	
		imprime_letras('filosofos');
		 require 'conexion.php';	 
	?>

	<br>
	<br>

	<ol class="lista-filosofos">	
	<?php 
 		$letra = 'a';
	
		imprime_nombre_autores();
	?>	
	</ol>


		
	</div>
