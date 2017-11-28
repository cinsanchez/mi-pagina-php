<?php 
	class FilosofosModel
	{
		private $baseDatos;

		public function __construct(Queriable $baseDatos)
		{
			$this->baseDatos = $baseDatos;
		}

		public function getFilosofoByLetra($letra)
		{
		 	$filosofos = $this->baseDatos->query("SELECT * FROM autor WHERE nombre_autor LIKE '$letra%'");
			return $filosofos;	
		}

		public function getNombreById($id_autor)
		{
			$filosofo = $this->baseDatos->query("SELECT nombre_autor FROM autor WHERE id_autor = '$id_autor'");
			return $filosofo;
		}

		public function getImagenById($id_filosofo)
		{	
			$filosofos = $this->baseDatos->query("SELECT imagen_url FROM imagen where id_autor ='$id_filosofo'");
			return $filosofos; 
		}

	}
 ?>