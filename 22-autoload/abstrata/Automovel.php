<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

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

?>