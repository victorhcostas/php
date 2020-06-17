<?php
//MYSQL INJECTION

//Funcao acessa e retorna um id do banco de dados, retorna um id padrao caso nao haja insercao de argumento
//Se um usuario digitar o argumento + " OR 1 = 1 --", ela lista todos os dados do banco de dados,
//inclusive os dados nao pertencentes aquele certo usuario
$id = (isset($_GET["id"]))?$_GET["id"]:1;

if (!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos voce!");
}

$conn = mysqli_connect("localhost", "root", "", "dbphp7");

$sql = "SELECT * FROM tb_usuarios WHERE idusuario = $id";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {

    //echo $resultado->deslogin . "<br>";
    var_dump($resultado);

}

?>