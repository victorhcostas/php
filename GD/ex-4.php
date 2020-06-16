 <?php
 //CRIAR UMA THUMBNAIL

header("Content-type: image/jpeg");

//importa o arquivo de imagem e mostra suas caracteristicas
$file = "wallpaper.jpg";
//var_dump(getimagesize($file));

//Dimensoes da thumb
$new_width = 256;
$new_height = 256;

/*Recebe a imagem e armazena em 2 variaveis as dimensoes originais
Linhas d+ pra algo simples. Descartado.
$data = getimagesize($file);
$width = $data[0];
$height = $data[1];*/

//Faz td o processo acima em 1 linha com a funcao "list"
list($old_width, $old_height) = getimagesize($file);

//funcao com uma paleta de cores mais rica q o imagecreate
//prepara a nova imagem
$new_image = imagecreatetruecolor($new_width, $new_height);
//prepara a imagem antiga
$old_image = imagecreatefromjpeg($file);

//funcao que "junta" 2 imagens, podendo edita-las
//imagecopyresampled(dst_image, src_image, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h);
imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

?>