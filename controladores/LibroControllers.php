<?php 
	class LibroControllers
	{
		public function __construct($libros_model, $frases_model)
		{
			$this->libros_model = $libros_model;
			$this->frases_model = $frases_model;
		}

		public function index()
		{
		$libros = [];
			if (isset($_GET['letra'])) {
				$libros = $this->libros_model->getTituloByLetra($_GET['letra']);
			}
			require ('vistas/LibroVista.php');
		}

		public function show($id)
		{
			$nombre_libros = $this->libros_model->getById($id);
			$frase_libros = $this->frases_model->getByIdLibro($id);
			$imagen_libros = $this->libros_model->getImagenById($id);	
			$prologo_libros = $this->libros_model->getById($id);
	
			require ('vistas/LibrosVista.php');		
		}

	}

 ?>