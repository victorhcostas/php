<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 3;

$stmt->execute(array($id));
echo "Delete OK!";

//defaz o delete no banco
/*$conn->rollback();
echo "<br>Rollback feito!";*/

//confirma o delete no banco
$conn->commit();
echo "<br>Delete confirmado!"

?>