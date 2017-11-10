<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases de filosofos </title>

	<?php require 'links.php';
		  require 'conexion.php';
		  
	?>

</head>
<body>
	<?php require 'menu.php';
		  require 'letras-filosofos.php';
	?>

	<p class="titles"> 
		<b class="third-title">Filosofo: </b>
		<span class="fourth-title"</span>
	</p>

	<?php
		 $id_filosofo = 1;
		 $id_filosofo = $_GET['id'];

		
		if (isset($_GET['id'])) {
			
			$query = "SELECT frase_desc FROM Frases where id_autor ='$id_filosofo'";
			$result = mysqli_query($conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="phrase">'.$row["frase_desc"].'</div>';
			}
			mysqli_free_result($result);
		}

	 ?>

</body>
</html>


	
