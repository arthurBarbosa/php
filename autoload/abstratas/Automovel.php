<?php

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarchar($marcha);
}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "O Veiculo acelerou até " . $velocidade . " Km/h ";
	}


	public function frenar($velocidade){
		echo "veiculo frenou até " . $velocidade . "km/h";
 	}


 	public function trocarMarchar($marcha){
		echo "veiculo engatou a marcha " . $marcha;
 	}
}


?>