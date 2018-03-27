<?php 

	$a = 10 ;

	function trocaValor($a){

		$a +=60;
		
		return $a;

	}


	//PASSAGEM DE PARAMETRO POR REFERENCIA
	function trocaValor2(&$a){

		$a +=60;
		
		return $a;

	}

	echo trocaValor($a);

	echo "<br>";

	echo $a;


	echo trocaValor2($a);

	echo "<br>";

	echo $a;


?>