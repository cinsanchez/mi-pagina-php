<?php

	function imprime_letras($tipo) {
		for ($i = 'A'; $i != 'AA'; $i++) {
			echo '<a class="btn-letras" href="'.$tipo.'.php?letra='.strtolower($i).'">'.$i.'</a>';
		    //<a class="btn-filosofos-letras" href="filosofos-letra-a">A</a>
		}
	}

	//function frase_aleatoria()
	//{
	//	require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->frase_del_dia($conexion);
	//}

	//function imprime_nombre_autores()
	//{
	//	require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->nombre_filosofos_autores($conexion);	
	//}

	//function imprime_titulos_libros()
	//{
	//	require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->titulos_libros_letra($conexion);
	//}

	//function imprime_titulo_autor(){
	//	require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->imprime_nombre_autor($conexion);	
	//}

	//function nombre_libro(){
		//require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->imprime_titulo_libros($conexion);
	//}

	//function imprime_frase_libro(){
		//require 'modelo.php';
	//	$conexion = new BaseDatos($config);
	//	$conexion->imprime_frases_autores($conexion);	
	//}

	//function imprime_frase_idlibro(){
		//require 'modelo.php';
	//	$conexion=new BaseDatos($config);
	//	$conexion->imprime_frases_libros($conexion);
	//}

	//function imprime_imagen_libro(){
		//require 'modelo.php';
	//	$conexion=new BaseDatos($config);
	//	$conexion->imprime_imagen_libro_filosofo($conexion);
		 //$id_filosofo = 1;
		 //$id_filosofo = $_GET['id'];
	//}

	//function imprime_imagen_libro_frase(){
		//require 'modelo.php';
	//	$conexion=new BaseDatos($config);
	//	$conexion->imprime_imagen_libro($conexion);
		//$id_libro = $_GET['id'];
	//}

	//function imprime_prologo_libro(){
		//require 'modelo.php';	
	//	$conexion=new BaseDatos($config);
	//	$conexion->imprime_prologo_libro($conexion);	
	//}	


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