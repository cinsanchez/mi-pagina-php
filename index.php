<?php 
		require 'vistas/LinksVista.php';
		require 'common.php';
		
		if (!isset($_GET['controller'])) {
			$clase_bienvenida = new BienvenidaController($frases_model);
			$clase_bienvenida->index();
			
		} else if ($_GET['controller'] == 'filosofo') {
			$clase_filosofo = new FilosofoControllers($filosofos_model, $frases_model);
		
			if (isset($_GET['id'])) {
				$clase_filosofo->show($_GET['id']);
			} else {
				$clase_filosofo->index();
			}
		} else if ($_GET['controller'] == 'libros') {
			$clase_libro = new LibroControllers($libros_model, $frases_model);

			if (isset($_GET['id'])) {
				$clase_libro->show($_GET['id']);
			} else {
				$clase_libro->index();
			}
		}
		

 ?>