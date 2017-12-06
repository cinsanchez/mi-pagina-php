<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<title>Una gran prueba</title>

	<?php require 'vistas/LinksVista.php';
		  //require 'conexion.php';
	?>

</head>

<body>
	<?php require 'vistas/MenuVista.php';
		  require 'vistas/TitulosVista.php';?>
	

	<p class="frase-dia">
	<b>Frase del día</b>
	<br>
	
	<?php foreach($frases as $frase): ?>
		 <p class='frase-dia'><?= $frase['frase_desc']; ?></p>
	<?php endforeach; ?>

	<?php require 'vistas/FooterVista.php'; ?>

	<br>
	<br>

