<?php

$diaSemana = 0;  //date("w");

//echo $diaSemana;

switch ($diaSemana) {

  case 0:
    echo "Domingo";
  break;

  case 1:
    echo "Segunda-Feira";
  break;
  
  case 2:
    echo "Terca-Feira";
  break;

  case 3:
    echo "Quarta-Feira";
  break;

  case 4:
    echo "Quinta--Feira";
  break;

  case 5:
    echo "Sexta-Feira";
  break;

  case 6:
    echo "Sabado";
  break;

  default:
  echo "Data invalida!";

}

?>