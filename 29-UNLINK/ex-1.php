<?php

$file = fopen("teste.txt", "w+");

fclose($file);

//apagaria a variavel, o que nao eh o q precisamos
//unlink($file);

//apagara apenas o arquivo da variavel
unlink("teste.txt");

echo "Arquivo removido com sucesso";

?>