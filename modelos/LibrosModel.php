<?php 
	class LibrosModel
	{
		private $baseDatos; 

		public function __construct(Queriable $baseDatos)
		{
			$this->baseDatos = $baseDatos; 
		}

		public function getTituloByLetra($letra)
		{
			$libros = $this->baseDatos->query("SELECT * FROM libros WHERE nombre_libros LIKE '$letra%'");
			return $libros;
		}

		public function getById($id_libro)
		{
			$libros = $this->baseDatos->query("SELECT nombre_libros, epilogo FROM libros WHERE id_libros = '$id_libro'");
				return $libros; 
		}

		public function getImagenById($id_libro)
		{
			$imagen_libro = $this->baseDatos->query("SELECT imagen_url FROM imagen WHERE id_libros = '$id_libro'");
			return $imagen_libro; 
		}

	}

 ?>