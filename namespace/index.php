<?php 


require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Rasmus Lerdof");
$cad->setEmail("lerdof@gmail.com");
$cad->setSenha("123456");

$cad->registrarVenda();

echo $cad;

 ?>