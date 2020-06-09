<?php

class Pessoa {

    //vvvv pode ser acessado por qualquer funcao dentro e fora da classe
    public $nome = "Rasmus Lerdorf";
    //vvvv pode ser acessado pelas classes filhas
    protected $idade = 48;
    //vvvv pode ser acessado apenas pela propria classe
    private $senha = "123456";

    public function verDados() {

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();

//funciona pois $nome eh publico
//echo $objeto->nome. "<br/>";
//nao funciona pois $senha eh privado
//echo $objeto->senha. "<br>";

$objeto->verDados();


?>