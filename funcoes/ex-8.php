<?php

//com o ":", conseguimos converter o tipo dos dados retornados pela funcao
function soma (int ... $valores):string {
  //soma os elementos do array
  return array_sum($valores);
}

var_dump(soma(3, 2));
echo "<br>";

//ignora a parte decimal
echo soma(12.2, 5.6);
echo "<br>";

echo soma(23, 4);
echo "<br>";
?>