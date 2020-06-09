<?php

$pessoa = array(
  'nome' => 'Joao',
  'idade' => 20
);

//a idade muda apenas dentro do laco, mas com o "&" ela muda
foreach ($pessoa as &$value) {

  if (gettype($value) === 'integer') $value += 10;

  echo $value . '<br>';

}

print_r($pessoa);

?>