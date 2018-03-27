
<?php 

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($numero){
		$this->numero =$numero;
	}
}

class Cpf extends Documento{

	public function validar():bool{

		//validação de cpf
		return true;
	}
}

$doc = new Cpf();

$doc->setNumero("23232324-44");

var_dump($doc->validar());

echo $doc->getNumero();

?>