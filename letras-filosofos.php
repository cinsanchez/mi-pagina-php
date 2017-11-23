	<h2 class="second-title">Frases por filosofos</h2>
	<div class="filosofos-letras">

	<?php  	
		imprime_letras('filosofos');
		 //require 'conexion.php';
		 //require 'common.php';	 
	?>

	<br>
	<br>

	<ol class="lista-filosofos">	
	<?php 
 		//$letra = 'a';
		$database->nombre_filosofos_autores_letra();
	?>	
	</ol>


		
	</div>
