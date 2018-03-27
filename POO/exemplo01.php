<?php 

class Pessoa{

	public $nome;// atributo

	public function falar(){//método

		return "O meu nome é " .$this->nome;
	}

}

$arthur = new Pessoa();
$arthur->nome ="Arthur Barbosa";
echo $arthur->falar();


?>