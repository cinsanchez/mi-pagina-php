<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Una gran prueba</title>

	<?php require 'links.php';
		  //require 'conexion.php';
	?>

</head>

<body>
	<?php require 'menu.php';
		  require 'titulos.php';?>
	

	<p class="frase-dia">
	<b>Frase del día</b>
	<br>
	
	<?php foreach($frases as $frase): ?>
		 <p class='frase-dia'><?= $frase['frase_desc']; ?></p>
	<?php endforeach; ?>

	<br>
	<br>

