<?php   

$nome = "programador web master";

// função nativa do PHP, usada para converter todos os caracteres para maiusculas
// essa função espera como parametro uma string, por isso o nome da variável deve ser colocado entre parenteses.
$nome =  strtoupper($nome) ;

echo $nome;

echo "<br>";

// função nativa do PHP, usada para converter todos os caracteres para minusculas
// essa função tambem espera como parametro uma string, por isso o nome da variável deve ser colocado entre parenteses.
$nome = strtolower($nome);
 
echo $nome;

echo "<br>";

// função nativa do PHP, usada para converter todos os caracteres e somente a primeira letras do paragrafo em maiusculas
// essa função tambem espera como parametro uma string, por isso o nome da variável deve ser colocado entre parenteses.
echo ucfirst($nome);

echo "<br>";

// função nativa do PHP, usada para converter todos os caracteres e as primeiras letras da de cada palavra se houver em maiusculas
// essa função tambem espera como parametro uma string, por isso o nome da variável deve ser colocado entre parenteses.
echo ucwords($nome);


?>