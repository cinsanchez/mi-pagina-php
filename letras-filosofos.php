	<h2 class="second-title">Frases por filosofos</h2>
	<div class="filosofos-letras">

	<?php  	
		imprime_letras('filosofos');
		 //require 'conexion.php';
			 
	?>

	<br>
	<br>
	<?php 
		$filosofos=[];
		if(isset($_GET['letra'])) {
				$letra = $_GET['letra'];
				$filosofos = $filosofos_model->getFilosofoByLetra($_GET['letra']);
			}
	?>	

	<ol class="lista-filosofos">	
	<?php foreach ($filosofos as $filosofo): ?> 
		<li>
			<a href="filosofo.php?id=<?= $filosofo['id_autor'];?>">
				<?= $filosofo['nombre_autor'];?>
			</a>
		</li>

	<?php endforeach; ?>
	


	</ol>


		
	</div>
