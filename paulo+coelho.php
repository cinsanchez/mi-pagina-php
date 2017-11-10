<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Paulo Coelho</title>
	
	<?php require 'links.php';
		  require 'conexion.php';
	?>

</head>
<body>
	<?php require 'menu.php'; ?>

	<?php require 'letras-filosofos.php';?>

	<p class="titles"> 
		<b class="third-title">Filosofo:</b>
		<span class="fourth-title"</span>Paulo Coelho
	</p>
		
		
		<?php 
	 		$result = mysqli_query($conexion, "SELECT frase_desc FROM frases WHERE id_autor = 7 ");

	 		while ($row = mysqli_fetch_array($result)) {
	 			echo '<div class="phrase">'.$row["frase_desc"].'</div>';
	 		}
	 		mysqli_free_result($result);
		?>

		<p class="titles"> 
			<b class="third-title">Libros</b>
		</p>

		<div class="imagen-prologo">
			<a href="adulterio.php"><img src="adulterio_PC.jpg"></a>
			<img src="alquimista_PC.jpg">
			<img src="once_minutos_PC.jpg">
			<img src="orillas_PC.jpg">
			<img src="veronika_PC.jpg">
			<img src="zahir_PC.jpg">
		</div>


	<?php require 'footer.php'; ?>
</body>
</html>