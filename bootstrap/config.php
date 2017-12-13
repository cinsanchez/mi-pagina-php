<?php 
	//$config = ['localhost',
	//		   'root',
	//		   '',
	//		   'libreria'
	//		  ];

	//return $config;
	//use Symfony\Component\Dotenv\Dotenv;
	return [
		$dbHost = getenv('DB_HOST'),
		$dbUser = getenv('DB_USER'),
		$dbPass = getenv('DB_PASS'),
		$dbName = getenv('DB_NAME')
		];

 ?>