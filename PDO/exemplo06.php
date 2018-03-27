<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario  = ?");


$id = 1;

$stmt->execute(array($id));
//$conn->rollback();
$conn->commit();

echo "Deletado com sucesso!";

 ?>