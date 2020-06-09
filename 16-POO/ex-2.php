<?php

class Carro {

    private $modelo;
    private $motor;
    private $ano;

    //o get vai acessar e retornar o atributo privado
    public function getModelo() {
        //uso $this-> para me referir ao atributo $modelo dessa classe nela mesma
        return $this->modelo;
    }

    //o set vai acessar e alterar o atributo privado
    public function setModelo($modelo) {

        $this->modelo = $modelo;
    }

    public function getMotor():float {

        return $this->motor;
    }

    public function setMotor($motor) {

        $this->motor = $motor;
    }

    public function getAno():int {

        return $this->ano;
    }

    public function setAno($ano) {

        $this->ano = $ano;
    }

    public function exibir() {

        return array(
            //uso $this-> para me referir ao metodo getModelo() dessa classe nela mesma
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
        );
    }

}

$gol = new Carro();
//nao funciona, pois tentara acessar diretamente o atributo privado $modelo
//$gol->modelo = "Gol GT";
$gol->setModelo("Gol GT");
$gol->setMotor(1.6);
$gol->setAno(2017);

//print_r($gol->exibir());
var_dump($gol->exibir());

?>