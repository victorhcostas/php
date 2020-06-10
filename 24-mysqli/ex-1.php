<?php

//conectando com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

//testando se ha erros de conexao
if ($conn->connect_error) {
    //mensagem de erro
    echo "Error: " . $conn->connect_error;
    exit;

}

//esse statement prepara as informacoes em sql para enviarmos pro banco de dados
//os "?" representam os valores que serao passados
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?,?)");

//$stmt->bind_param("ss", "user", "12345");
//nao funciona, pois user e senha sao variaveis por referencia, soh a string n eh o suficiente
//tem que colocar uma variavel

//"ss" quer dizer que as duas informacoes serao string
//s para string, d para float(double), i para int, etc.
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "!@#$%";

$stmt->execute();

?>