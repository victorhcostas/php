<?php
/*
$anoNascimento = 1990;
$nomeCompleto = "Vh";
*/
//Abaixo temos a variavel com o nome do objeto
$nome = "Victor";

$sobrenome = "Hugo";

$nomeCompleto = $nome . " " . $sobrenome ;

echo $nomeCompleto;

exit;

echo "<br/>";

unset($nome);

if(isset($nome)){

  echo $nome;

}