<?php

function __autoload($nomeClasse) {

    var_dump($nomeClasse);
    require_once("$nomeClasse.php");

}

//tradicionalmente, seria necessario fazer um require_once para toda classe
//importada de outros arquivos
//a funcao autoload automatiza o processo e deixa o codigo + dinamico
//ela ja nao eh mais recomendada devido a depreciacao do PHP

//eh mais recomendado utilizar a funcao spl_autoload_register() do ex-2.php
//require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(80);

?>