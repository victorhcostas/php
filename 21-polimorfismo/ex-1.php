<?php
//polimorfismo e quando ha metodos com o mesmo nome em classes herdadas
//porem tem funcoes diferentes 

abstract class Animal {

    public function falar() {

        return "Som";

    }

    public function mover() {

        return "Anda";

    }

}

class Cachorro extends Animal {
    //a funcao falar de Cachorro sobrescreve a funcao falar de Animal
    public function falar() {
        
        return "Late";

    }

}

class Gato extends Animal {

    public function falar() {

        return "Mia";

    }

}

class Passaro extends Animal {

    public function falar() {

        return "Canta";

    }

    public function mover() {
        //this se refere ao mesmo objeto, ja parent se refere a 
        //classe pai
        return "Voa e " . parent::mover();

    }

}



$pluto = new Cachorro();
$garfield = new Gato();
$priquito = new Passaro();

echo $priquito->falar() . "<br>";
echo $priquito->mover() . "<br>";

echo "-----------------------<br>";

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "-----------------------<br>";

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

?>