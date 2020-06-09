<?php

$frase = "A repeticao e a mae da retencao";

$palavra = "mae";

$q = strpos($frase, $palavra);

var_dump($q);

echo "<br>";

$texto = substr($frase, 12);

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>