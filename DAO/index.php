<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//Carrega um so usuario
/*$root = new Usuario();
$root->loadbyId(4);
echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuarios pelo login
//$search = Usuario::search("r");
//echo json_encode($search);

//Carrega um usuario autenticando antes o acesso
$usuario = new Usuario();
$usuario->login("richard", "50135");

echo $usuario;

?>