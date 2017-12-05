<?php
	function imprime_letras($tipo) {
		for ($i = 'A'; $i != 'AA'; $i++) {
			echo '<a class="btn-letras" href="index.php?controller='.$tipo.'&letra='.strtolower($i).'">'.$i.'</a>';
		    //<a class="btn-filosofos-letras" href="filosofos-letra-a">A</a>
		}
	}
	
 ?>