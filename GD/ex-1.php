<?php
//PROCESSAMENTO DE IMAGEM

//prepara o arquivo de imagem; deve ser a ultima coisa a ser colocada no codigo site
header("Content-Type: image/png");

//a variavel recursiva $image recebe a funcao que cria a imagem com suas
//medidas de largura e altura (x,y) em pixels
$image = imagecreate(256,256);

//essa eh a paleta de cores que iremos usar
//a primeira cor sempre "pinta" o background da imagem
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

//imprime um texto sobre a imagem com fonte, tamanho, largura, altura e cor
imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

//renderiza a imagem
imagepng($image);

//libera a memoria da imagem
imagedestroy($image);

?>