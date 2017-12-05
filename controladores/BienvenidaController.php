<?php 
	class BienvenidaController
	{
		public function __construct($frases_model)
		{
			$this->frases_model = $frases_model;
		}

		public function index()
		{
			$frases = $this->frases_model->getFrase();	
			require ('vistas/BienvenidaVista.php');
		}
	}

 ?>