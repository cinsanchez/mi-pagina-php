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
			$letra = 'a';
			
			if (isset($_GET['letra'])) {
				$letra = $_GET['letra'];
				$result = mysqli_query($conexion, "SELECT * FROM libros WHERE nombre_libros LIKE '$letra%'");

				while ($row = mysqli_fetch_array($result)) {
					$id_libro = $row["id_libros"];
					$nombre = $row["nombre_libros"];
					echo '<li><a href="libro.php?id='.$id_libro.'">'.$nombre."</a></li>";
				}
			}
		 ?>

	</ol>
	</div>
