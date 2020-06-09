<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct() {

        //var_dump("DESTRUIR");

    }

    public function __toString() {

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }

}

//instanciei um novo objeto da classe "Endereco" utilizando o metodo construtor
$meuEndereco = new Endereco("Rua Ademar Saraiva Leao", "123", "Santo");

/*var_dump($meuEndereco);
unset($meuEndereco);*/

echo $meuEndereco;

?>