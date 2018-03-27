<?php 

function ola($texto){

	return "Olá $texto <br>";

}


function ola2($texto = "mundo"){

	return "Olá $texto <br>";

}


function ola3($texto = "mundo ", $periodo = " Bom dia"){

	return "Olá $texto  $periodo <br>";

}

function ola4($texto , $periodo = " Bom dia"){

	return "Olá $texto  $periodo <br>";

}
	echo ola("Arthur");

	echo ola("Barbosa");

	echo ola2();

	echo ola3();

	echo ola3("","Boa noite");
	echo ola3("Arthur ", " Boa tarde");
	echo ola3("Barbosa " , "");

	echo ola4("mundo");


?>