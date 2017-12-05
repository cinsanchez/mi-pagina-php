<?php 
	$config = require 'config.php';
	require 'funciones.php';
	
	function cargarModelos($clase)
	{
		if (file_exists('modelos/'.$clase.'.php')) {
			require 'modelos/'.$clase.'.php'; 
		}	
	}

	function cargarClases($clase)
	{
		if (file_exists('controladores/'.$clase.'.php')) {
			require 'controladores/'.$clase.'.php';
		}
	}

	spl_autoload_register('cargarModelos');
	spl_autoload_register('cargarClases');

	$database = new BaseDatos($config);

	$filosofos_model = new FilosofosModel($database);
	$libros_model = new LibrosModel($database);
	$frases_model = new FrasesModel($database);

 ?>