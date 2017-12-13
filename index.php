<?php 
	use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;

	//namespace Symfony\Component\Dotenv;
	require 'vendor/autoload.php';

	use Symfony\Component\Dotenv\Dotenv;

	$dotenv = new Dotenv();
	$dotenv->load(__DIR__.'/.env');

	$app = new \Slim\App;
	$container = $app->getContainer();
	$container['view'] = new \Slim\Views\PhpRenderer("../vistas/");

	$response = $this->view->render($response, 'LinksVista.php');
	return $response; 
	$app->run();

		//require 'vistas/LinksVista.php';
		require 'bootstrap/common.php';
		
		if (!isset($_GET['controller'])) {
			$clase_bienvenida = new BienvenidaController($frases_model);
			$clase_bienvenida->index();
			
		} else if ($_GET['controller'] == 'filosofo') {
			$clase_filosofo = new FilosofoControllers($filosofos_model, $frases_model);
		
			if (isset($_GET['id'])) {
				$clase_filosofo->show($_GET['id']);
			} else {
				$clase_filosofo->index();
			}
		} else if ($_GET['controller'] == 'libros') {
			$clase_libro = new LibroControllers($libros_model, $frases_model);

			if (isset($_GET['id'])) {
				$clase_libro->show($_GET['id']);
			} else {
				$clase_libro->index();
			}
		}
		

 ?>