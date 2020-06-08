<?php

$a = 10;

//o q acontece na funcao nao altera o valor original da variavel
/*function trocaValor ($a) {

  $a += 50;

  return $a;

}*/

//o "&" passa a ref da variavel e ela pode ser alterada pela funcao
/*function trocaValor (&$a) {

  $a += 50;

  return $a;

}*/

//a variavel mostrada dentro da funcao nao e a mesma da $a fora da funcao
function trocaValor ($b) {

  $b += 50;

  return $b;

}

//foi passado o valor de $a como parametro
echo trocaValor($a);

echo "<br>";

echo $a;

?>