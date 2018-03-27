<?php 

$qualSuaIdade = 69;

$idadeCrianca =12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualSuaIdade < $idadeCrianca){
	
	echo "voçê é criança";
}else if($qualSuaIdade < $idadeMaior){
	
	echo "adolescente";

}else if($qualSuaIdade < $idadeMelhor){

	echo "Adulto";

}else{

	echo "Idoso";

}

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)?"Menor de idade " : "Maior de Idade";

?>