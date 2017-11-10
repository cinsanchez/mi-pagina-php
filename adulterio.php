<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adulterio</title>
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
		<span class="fourth-title"</span>"Adulterio"
	</p>

	<?php 
		$result = mysqli_query($conexion, "SELECT frase_desc FROM frases WHERE id_libros = 1");

		while ($row = mysqli_fetch_array($result)) {
			echo '<div class="phrase">'.$row["frase_desc"].'</div>';
		}
		mysqli_free_result($result);
	 ?>

	<?php 
		require 'prologos.php';

		$result = mysqli_query($conexion, "SELECT epilogo FROM libros WHERE id_libros = 1");

		$row = mysqli_fetch_array($result);
		foreach ($row as $autor) {
			$epilogo = $row["epilogo"];
		}
			echo '<p>'.$epilogo.'</p>';

		//while ($row = mysqli_fetch_array($result)) {
		//	echo '<p>'.$row["epilogo"].'</p>';
	//	}
		//mysqli_free_result($result);
	 ?>

	</div>

	<div id="column-2" class="imagen-frase">
		<img src="adulterio_PC.jpg">
	</div>

	<div style="clear:both"></div>
	
	<?php require 'footer.php'; ?>
	
</body>
</html>