<?php 
	class FilosofoControllers
	{

		public function __construct($filosofos_model, $frases_model)
		{
			$this->filosofos_model = $filosofos_model;
			$this->frases_model = $frases_model;
		}

		public function index()
		{

			$filosofos=[];
		if(isset($_GET['letra'])) {
				$letra = $_GET['letra'];
				$filosofos = $this->filosofos_model->getFilosofoByLetra($_GET['letra']);
			}
			require ('vistas/FilosofosVista.php');
		}

		public function show($id)
		{
			$filosofos = $this->filosofos_model->getNombreById($id);	
			$frases = $this->frases_model->getByIdFilosofos($id);
			$imagenes = $this->filosofos_model->getImagenById($id);

			require ('vistas/FilosofoVista.php');
		}

	}

 ?>