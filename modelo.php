<?php 
	class BaseDatos
	{
		private $conexion;
		
		public function __construct($config)
		{
			$this->conexion = mysqli_connect($config[0], $config[1], $config[2], $config[3]);
		}

		public function frase_del_dia()
		{
			$result = mysqli_query($this->conexion, "SELECT frase_desc FROM frases ORDER BY RAND() LIMIT 0,1");

			while ($row = mysqli_fetch_array($result)) {
				$id_filosofo = $row["frase_desc"];
				$nombre = $row["frase_desc"];
				echo '<p class = "frase-dia">'.$nombre.'</p>';
			}
			mysqli_free_result($result);	
		}

		public function nombre_filosofos_autores_letra()
		{
			if(isset($_GET['letra'])) {
		 	$letra =  $_GET['letra'];
		 	$result = mysqli_query($this->conexion, "SELECT * FROM autor WHERE nombre_autor LIKE '$letra%'");

			while ($row = mysqli_fetch_array($result)) {
				$id_filosofo = $row["id_autor"];
				$nombre = $row["nombre_autor"];
				echo '<li><a href="filosofo.php?id='.$id_filosofo.'">'.$nombre."</a></li>";
			}
				mysqli_free_result($result);
			}	
		}

		public function titulos_libros_letra(){
			if (isset($_GET['letra'])) {
				$letra = $_GET['letra'];
				$result = mysqli_query($this->conexion, "SELECT * FROM libros WHERE nombre_libros LIKE '$letra%'");

				while ($row = mysqli_fetch_array($result)) {
					$id_libro = $row["id_libros"];
					$nombre = $row["nombre_libros"];
					echo '<li><a href="libro.php?id='.$id_libro.'">'.$nombre."</a></li>";
				}
			}
		}

		public function imprime_nombre_autor()
		{
			if (isset($_GET['id'])) {
			$id_autor = $_GET['id'];
			$query = "SELECT nombre_autor FROM autor WHERE id_autor = '$id_autor'";
			$result = mysqli_query($this->conexion, $query);
		
				while ($row = mysqli_fetch_array($result)) {
					echo '<span class="fourth-title">'.$row["nombre_autor"].'</span>';
				}
				mysqli_free_result($result);
			}
		}

		public function imprime_titulo_libros()
		{
			if (isset($_GET['id'])) {
				$id_libro = $_GET['id'];
				$query = "SELECT nombre_libros FROM libros WHERE id_libros = '$id_libro'";
				$result = mysqli_query($this->conexion, $query);

				while ($row = mysqli_fetch_array($result)) {
					echo '<span class="fourth-title">'.$row["nombre_libros"].'</span>';
				}
				mysqli_free_result($result);
			}
		}

		public function imprime_frases_autores()
		{
			$id_filosofo = $_GET['id'];
			if (isset($_GET['id'])) {
			
			$query = "SELECT frase_desc FROM Frases where id_autor ='$id_filosofo'";
			$result = mysqli_query($this->conexion, $query);

				while ($row = mysqli_fetch_array($result)) {
					echo '<div class="phrase">'.$row["frase_desc"].'</div>';
				}
				mysqli_free_result($result);
			}
		}

		public function imprime_frases_libros()
		{
			if (isset($_GET['id'])) {
			$id_libro = $_GET['id'];
			$query = "SELECT frase_desc FROM frases WHERE id_libros = '$id_libro'";
			$result = mysqli_query($this->conexion, $query);
		
			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="phrase">'.$row["frase_desc"].'</div>';
			}
			mysqli_free_result($result);
			}
		}

		public function imprime_imagen_libro_filosofo()
		{
			$id_filosofo = $_GET['id'];
			if (isset($_GET['id'])) {
			
			$query = "SELECT imagen_url FROM imagen where id_autor ='$id_filosofo'";
			$result = mysqli_query($this->conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="imagen-prologo"><img src='.$row["imagen_url"].' height="350" width="270"></div>';
			}
			mysqli_free_result($result);
			}
		}
		
		public function imprime_imagen_libro()
		{
			$id_libro = $_GET['id'];
			if (isset($_GET['id'])) {
			$query = "SELECT imagen_url FROM imagen WHERE id_libros = '$id_libro'";
			$result = mysqli_query($this->conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="imagen-prologo"><img src='.$row["imagen_url"].' height="350" width="270"></div>';
			}
			mysqli_free_result($result);
			}
		}

		public function imprime_prologo_libro()
		{
			$id_libro = $_GET['id'];
			if (isset($_GET['id'])){
			$id_libro = $_GET['id'];
			$query = "SELECT epilogo FROM libros WHERE id_libros = '$id_libro'";
			$result = mysqli_query($this->conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<p>'.$row["epilogo"].'</p>';
			}
			mysqli_free_result($result);
		}
		}
	
	}

 ?>