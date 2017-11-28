<?php 
	class FrasesModel
	{
		private $baseDatos;
		public function __construct(Queriable $baseDatos)
		{
			$this->baseDatos = $baseDatos;
		}

		public function getFrase()
		{
			$frase = $this->baseDatos->query("SELECT frase_desc FROM frases ORDER BY RAND() LIMIT 0,1");
			return $frase;
		}

		public function getByIdFilosofos($id_autor)
		{
			$filosofo = $this->baseDatos->query("SELECT frase_desc FROM Frases where id_autor ='$id_autor'");
			return $filosofo; 	
		}

		public function getByIdLibro($id_libro)
		{
			$libro = $this->baseDatos->query("SELECT frase_desc FROM frases WHERE id_libros = '$id_libro'");
			return $libro; 
		}
	}


 ?>