<?php

class Pessoa{
  //vvvvvv encapsulamento 
    public $nome;//Atributo

    public function falar(){//Metodo

        return "O meu nome eh ".$this->nome;/*para nos referirmos ao atributo $nome dentro dos metodos da classe "Pessoa", 
                                            devemos acrescentar a palavra definida "$this->nome"*/

    }

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();

?>