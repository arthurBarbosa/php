<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234");

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha)VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "12345";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();

echo "Inserido com sucesso!";

 ?>