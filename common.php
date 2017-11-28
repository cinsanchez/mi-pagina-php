<?php 
	$config = require 'config.php';
	
	function cargarModelos($clase)
	{
		require 'modelos/'.$clase.'.php';
	}

	spl_autoload_register('cargarModelos');

	$database = new BaseDatos($config);

	$filosofos_model = new FilosofosModel($database);
	$libros_model = new LibrosModel($database);
	$frases_model = new FrasesModel($database);

 ?>