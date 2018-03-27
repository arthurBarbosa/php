<?php 


	function ola(){

		echo "Olá mundo!<br>";

	}


	function ola2(){
		
		return "Olá mundo!<br>";

	}


	ola();

	$frase = ola2();

	echo strlen($frase);


?>