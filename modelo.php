<?php 

	interface Queriable {
		public function query($query);
	}


	class BaseDatos implements Queriable
	{
		private $conexion;
		
		public function __construct($config)
		{
			$this->conexion = mysqli_connect($config[0], $config[1], $config[2], $config[3]);
		}

		public function query($query)
		{
			$result = mysqli_query($this->conexion, $query);
			$data_query = [];
			while ($row = mysqli_fetch_array($result)) {
				$data_query[] = $row;
			}
			mysqli_free_result($result);
			return $data_query;
		}
	}

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