<?php 

$nome = " Arthur Barbosa ";

$nome2 = ' Treinamentos ';

//var_dump ($nome, $nome2);

// dentro das aspas o PHP faz a interpretação de tudo que está entre as aspas
echo "ABC $nome";

echo "<br>";

//aqui o PHP não faz a verificação se tem ou não uma variável para ser intepretada
echo 'ABC $nome';

?>