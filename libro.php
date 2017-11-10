<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de libros</title>

	<?php require 'links.php';
		  require 'conexion.php';
		  
	?>
</head>
<body>
	<?php require 'menu.php';
		  require 'letras-libros.php'; 
	?>

	<p class="titles">
		<b class="third-title">Libro: </b>
		<span class="fourth-title"</span>""
	</p>
	
	<?php 
		$letra = 'a';

		if (isset($_GET['id'])) {
			$id_libro = $_GET['id'];
			$query = "SELECT frase_desc FROM frases WHERE id_libros = '$id_libro'";
			$result = mysqli_query($conexion, $query);
		
			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="phrase">'.$row["frase_desc"].'</div>';
			}
			mysqli_free_result($result);
		}


	 ?>

</body>
</html>