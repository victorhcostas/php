<?php

$nome = "Glaucio";

function teste(){

  global $nome;
  echo $nome;

}

function teste2(){

  global $nome;
  echo "<br/>" . $nome . "agora no teste 2";

}

teste();

teste2();

?>