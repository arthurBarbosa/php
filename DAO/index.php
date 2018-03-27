<?php 

require_once ("config.php");

/*
$usuarios = $sql->select("select * from tb_usuarios");

echo json_encode($usuarios);
*/


//$root = new Usuario();
//$root->loadById(3);
//echo $root ;


//carrega uma lista de usuarios
//$lista = new Usuario();
//$resultado = $lista->getList();

//echo json_encode($resultado);

//metodo sendo executado atraves de um metodo static->não precisa instancia o objeto, pode ser chamado direto
//$listaComMetodoStatic = Usuario::getList();
//echo json_encode($listaComMetodoStatic);

/*$search = Usuario::search("ar");
echo json_encode($search);*/

//carrega um usuario usando o login e a senha 
//$usuario = new Usuario();
//$usuario->login("jose","12345");
//echo $usuario;

/*$aluno = new Usuario();
$aluno->setDeslogin("Rilmar");
$aluno->setDessenha("12345");

$aluno->insert();*/
/*
$aluno = new Usuario("Paulo", "1234");
$aluno->insert();
echo $aluno;
*/

$aluno = new Usuario();

$aluno->loadById(7);

$aluno->update("Professor", "qwert");

echo $aluno;
 ?>