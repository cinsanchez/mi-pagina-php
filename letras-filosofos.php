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
		$result = true;

		if(isset($_GET['letra'])) {
		 	$letra =  $_GET['letra'];
		 	$result = mysqli_query($conexion, "SELECT * FROM autor WHERE nombre_autor LIKE '$letra%'");

		 	//$row = mysqli_fetch_array($result);
		 	//foreach ($row as $autor) {
		 	//	$nombre = $row["nombre_autor"];
			//} 
			//echo '<li><a href="'.urlencode(strtolower($nombre)).'.php'.'">'.$nombre."</a></li>";

			while ($row = mysqli_fetch_array($result)) {
				$nombre = $row["nombre_autor"];
				echo '<li><a href="'.urlencode(strtolower($nombre)).'.php'.'">'.$nombre."</a></li>";
			}
			mysqli_free_result($result);
		}	
	?>	
	</ol>


		
	</div>
