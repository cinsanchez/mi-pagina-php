	<h2 class="second-title">Frases por filosofos</h2>
	<div class="filosofos-letras">

	<?php  	
		imprime_letras('filosofo');
		 //require 'conexion.php';		 
	?>

	<br>
	<br>
	
	<ol class="lista-filosofos">	
	<?php foreach ($filosofos as $filosofo): ?> 
		<li>
			<a href="index.php?controller=filosofo&id=<?= $filosofo['id_autor'];?>">
				<?= $filosofo['nombre_autor'];?>
			</a>
		</li>

	<?php endforeach; ?>

	</ol>

		
	</div>
