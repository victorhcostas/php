<?php

//os "..." criam o array $valores sem precisar denotar os elementos
function soma (int ... $valores) {
  //soma os elementos do array
  return array_sum($valores);
}

echo soma(3, 2);
echo "<br>";

//ignora a parte decimal
echo soma(12.2, 5.6);
echo "<br>";

echo soma(23, 4);
echo "<br>";
?>