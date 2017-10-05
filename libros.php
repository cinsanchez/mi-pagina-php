<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Frases por libros</title>

	<?php require 'links.php';?>

</head>
<body>
	<?php require 'menu.php';?>

	<?php require 'letras-libros.php';?>

<?php
	if (isset($_GET['letra'])) {
		require 'libros_letra_a.php';
	};

 ?>

	<div style="clear:both"></div>
	
	<?php require 'footer.php';?>

</body>
</html>