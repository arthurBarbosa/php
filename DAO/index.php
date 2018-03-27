<?php 

require_once ("config.php");

/*
$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);
*/


$root = new Usuario();

$root->loadById(3);

echo $root;
 ?>