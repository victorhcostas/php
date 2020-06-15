<?php

//configura o PHP para nao reportar "notices"
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;

?>