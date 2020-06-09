<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

//uma classe abstrata nao precisa ser instanciada
//a classe Automovel segue a interface Veiculo, logo suas derivadas tambem
//seguem automaticamente a interface
abstract class Automovel implements Veiculo {

    public function acelerar($veloc) {

        echo "O veiculo acelerou ate " . $veloc . " km/h";

    }

    public function frenar($veloc) {

        echo "O veiculo frenou ate " . $veloc . " km/h";

    }

    public function trocarMarcha($marc) {

        echo "O veiculo engatou a marcha " . $marc;

    }

}

//uma classe pode derivar de apenas uma classe abstrata, enquanto pode derivar-se de varias interfaces
//a classe abstrata, porem, nao exige que seus os metodos e atributos sejam
//implementados na classe filha, diferentemente da interface
class DelRey extends Automovel {

    public function empurrar() {


    }

}

$carro = new DelRey();

$carro->acelerar(200);

?>