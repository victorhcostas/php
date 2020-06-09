<?php

//a interface eh como uma forma que denota os aspectos basicos que suas
//filhas devem ter
interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

//ao implementar a interface veiculo, a classe devera ter obrigatoriamente
//os mesmos metodos da interface
class Civic implements Veiculo {

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

$carro = new Civic();

$carro->trocarMarcha(1);

?>