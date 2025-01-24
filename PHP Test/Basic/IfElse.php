<?php 

$a = "s";


function Test($a){	

	global $a;

	if ($a === "s") {
		echo "Mantap".PHP_EOL;
	}
	else {
		echo 'TOLOL';
	}
	
	return $a;	
}



?>