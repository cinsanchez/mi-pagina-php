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
 ?>
