<?php
/*FUNCAO DEPRECIADA, TENTAR COM UMA NOVA

Defino uma constante SECRET utlizando a funcao pack() para converter
a string senha em uma string de 16bits, que vai servir de chave para o
encriptamento
define('SECRET', pack('a16', 'senha'));

a funcao mcrypt_encrypt() pega um dado de 16 bits e o criptografa
$mcrypt = mcrypt_encrypt(
    MCRYPT_RIJNDAEL_128,
    SECRET,
    json_encode($data),
    MCRYPT_MODE_ECB
);
var_dump($mcrypt);*/

///////////////////////////////////////////////////////////////////////
//CRIPTOGRAFIA EM PHP: ENCRIPTANDO DADOS UTILIZANDO OPENSSL_ENCRYPT  //
///////////////////////////////////////////////////////////////////////

//Como a funcao mcrypt_encrypt() esta depreciada e nao e mais confiavel,
//usaremos a funcao openssl_encrypt():

//Defino duas constantes SECRET utlizando a funcao pack() para converter
//a string senha em string de 16bits, e as duas servirao de chave para o
//encriptamento
define('SECRET_IV', pack('a16', 'senha'));
define('SECRET', pack('a16', 'senha'));

//Quero encriptar a informacao Hcode de meu nome
$data = [
    "nome"=> "Hcode"
];

$openssl = openssl_encrypt (
    json_encode($data),
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

echo $openssl . "<br>";

$string = openssl_decrypt($openssl,
    'AES-128-CBC',
    SECRET,
    0,
    SECRET_IV
);

var_dump(json_decode($string, true));

?>