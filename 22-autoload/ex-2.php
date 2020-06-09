<?php

function incluirClasses($nomeClasse) {

    if (file_exists($nomeClasse . ".php") === true) {
        require_once($nomeClasse . ".php");
    }

}

//essa funcao spl faz o autoload sem implementar a funcao
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse) {

    if (file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
        require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }

});

$carro = new DelRey();

$carro->acelerar(80);

?>