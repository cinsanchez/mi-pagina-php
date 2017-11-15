<?php

	function imprime_letras($tipo) {
		for ($i = 'A'; $i != 'AA'; $i++) {
			echo '<a class="btn-letras" href="'.$tipo.'.php?letra='.strtolower($i).'">'.$i.'</a>';
		    //<a class="btn-filosofos-letras" href="filosofos-letra-a">A</a>
		}
	}

	function imprime_nombre_autores(){
		require 'conexion.php';

		if(isset($_GET['letra'])) {
		 	$letra =  $_GET['letra'];
		 	$result = mysqli_query($conexion, "SELECT * FROM autor WHERE nombre_autor LIKE '$letra%'");

		 	//$row = mysqli_fetch_array($result);
		 	//foreach ($row as $autor) {
		 	//	$nombre = $row["nombre_autor"];
			//} 
			//echo '<li><a href="'.urlencode(strtolower($nombre)).'.php'.'">'.$nombre."</a></li>";

			while ($row = mysqli_fetch_array($result)) {
				$id_filosofo = $row["id_autor"];
				$nombre = $row["nombre_autor"];
				echo '<li><a href="filosofo.php?id='.$id_filosofo.'">'.$nombre."</a></li>";
			}
			mysqli_free_result($result);
		}	
	}

	function imprime_titulos_libros(){
		require 'conexion.php';
		$letra = 'a';
			
			if (isset($_GET['letra'])) {
				$letra = $_GET['letra'];
				$result = mysqli_query($conexion, "SELECT * FROM libros WHERE nombre_libros LIKE '$letra%'");

				while ($row = mysqli_fetch_array($result)) {
					$id_libro = $row["id_libros"];
					$nombre = $row["nombre_libros"];
					echo '<li><a href="libro.php?id='.$id_libro.'">'.$nombre."</a></li>";
				}
			}
	}

	function imprime_titulo_autor(){
		require 'conexion.php';

		if (isset($_GET['id'])) {
			$id_autor = $_GET['id'];
			$query = "SELECT nombre_autor FROM autor WHERE id_autor = '$id_autor'";
			$result = mysqli_query($conexion, $query);
		
			while ($row = mysqli_fetch_array($result)) {
				echo '<span class="fourth-title">'.$row["nombre_autor"].'</span>';
			}
			mysqli_free_result($result);
		}
	}

	function nombre_libro(){
		require 'conexion.php';

		if (isset($_GET['id'])) {
			$id_libro = $_GET['id'];
			$query = "SELECT nombre_libros FROM libros WHERE id_libros = '$id_libro'";
			$result = mysqli_query($conexion, $query);
		
			while ($row = mysqli_fetch_array($result)) {
				echo '<span class="fourth-title">'.$row["nombre_libros"].'</span>';
			}
			mysqli_free_result($result);
		}
	}

	function imprime_frase_libro(){
		require 'conexion.php';
		$id_filosofo = 1;
		$id_filosofo = $_GET['id'];

		if (isset($_GET['id'])) {
			
			$query = "SELECT frase_desc FROM Frases where id_autor ='$id_filosofo'";
			$result = mysqli_query($conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="phrase">'.$row["frase_desc"].'</div>';
			}
			mysqli_free_result($result);
		}
	}

	function imprime_frase_idlibro(){
		require 'conexion.php';

		$letra = 'a';

		if (isset($_GET['id'])) {
			$id_libro = $_GET['id'];
			$query = "SELECT frase_desc FROM frases WHERE id_libros = '$id_libro'";
			$result = mysqli_query($conexion, $query);
		
			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="phrase">'.$row["frase_desc"].'</div>';
			}
			mysqli_free_result($result);
		}
	}

	function imprime_imagen_libro(){

		require 'conexion.php';

		 $id_filosofo = 1;
		 $id_filosofo = $_GET['id'];

		if (isset($_GET['id'])) {
			
			$query = "SELECT imagen_url FROM imagen where id_autor ='$id_filosofo'";
			$result = mysqli_query($conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<div class="imagen-prologo"><img src='.$row["imagen_url"].' height="350" width="270"></div>';
			}
			mysqli_free_result($result);
		}
	}

	function imprime_prologo_libro(){
		require 'conexion.php';	

		if (isset($_GET['id'])){
			$id_libro = $_GET['id'];
			$query = "SELECT epilogo FROM libros WHERE id_libros = '$id_libro'";
			$result = mysqli_query($conexion, $query);

			while ($row = mysqli_fetch_array($result)) {
				echo '<p>'.$row["epilogo"].'</p>';
			}
			mysqli_free_result($result);
		}
	}	


	//function imprime_titulos_libros($letra) {
	//	$libros_a = array(
	//		0 => '<li><a href=a buen fin no hay mal principio.php>'.'<b>A buen fin no hay mal principio,</b>'.'William Shakespeare</a></li>',
	//		1 => '<li><a href=""><b>A mi alma moribunda,</b>'.'Esteban Osorio</a></li>',
	//		2 => '<li><a href=""><b>A orillas del río piedra me senté y lloré,</b>'.'Paulo Coelho</a></li>',
	//		3 => '<li><a href=""><b>A vuestro gusto,</b>'.'William Shakespeare</a></li>',
	//		4 => '<li><a href=""><b>Abrojos,</b>'.'Rubén Dario</a></li>',
	//		5 => '<li><a href=""><b>Adulterio,</b>'.'Paulo Coelho</a></li>',
	//		6 => '<li><a href=""><b>Alicia a través del espejo,</b>'.'Lewis Carroll</a></li>',
	//		7 => '<li><a href=""><b>Alicia en el país de las maravillas,</b>'.'Lewis Carroll</a></li>',
	//		8 => '<li><a href=""><b>Amando en sueños,</b>'.'Frank Fernández</a></li>',
	//		9 => '<li><a href=""><b>Amor con amor se paga,</b>'.'José Julián de Martí</a></li>',
	//		10 => '<li><a href=""><b>Ana Karenina - primera parte,</b>'.'Conde León Tolstoi</a></li>',
	//		11 => '<li><a href=""><b>Ana Karenina - segunda parte,</b>'.'Conde León Tolstoi</a></li>',
	//		12 => '<li><a href=""><b>Ana Karenina - tercera parte,</b>'.'Conde León Tolstoi</a></li>',
	//		13 => '<li><a href=""><b>Ana Karenina - cuarta parte,</b>'.'Conde León Tolstoi</a></li>',
	//		14 => '<li><a href=""><b>Ana Karenina - quinta parte,</b>'.'Conde León Tolstoi</a></li>',
	//		15 => '<li><a href=""><b>Ana Karenina - sexta parte,</b>'.'Conde León Tolstoi</a></li>',
	//		16 => '<li><a href=""><b>Ana Karenina - séptima parte,</b>'.'Conde León Tolstoi</a></li>',
	//		17 => '<li><a href=""><b>Ana Karenina - octava parte,</b>'.'Conde León Tolstoi</a></li>',
	//		18 => '<li><a href=""><b>Annette,</b>'.'Elizabeth Tornelli</a></li>',
	//		19 => '<li><a href=""><b>Antígona,</b>'.'Sófocles</a></li>',
	//		20 => '<li><a href=""><b>Antología,</b>'.'Henry W.</a></li>',
	//		21 => '<li><a href=""><b>Atala,</b>'.'Francois Auguste</a></li>',
	//		22 => '<li><a href=""><b>Atrapa que?,</b>'.'Alicia Silvia</a></li>',
	//		23 => '<li><a href=""><b>Autobiografía de una pulga,</b>'.'Anónimo</a></li>',
	//		24 => '<li><a href=""><b>Azul ...,</b>'.'Rubén Dario </a></li>'
	//	);

	//	$array = ['a' => $libros_a];

	//	for ($i=0; $i < 25; $i++) { 
	//		echo($array[$letra][$i]);
	//	}
	//}


	
 ?>