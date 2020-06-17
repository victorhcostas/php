<?php
//ALTERANDO UMA IMAGEM EXISTENTE
//abre uma imagem existente para eu poder edita-la
$image = imagecreatefromjpeg("certificado.jpg");

//paleta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//estou escrevendo sobre a imagem do certificado
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_encode("Concluido em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//alem de criar a nova imagem, gera o arquivo com o nome especificado
//e com a porcentagem de resolucao comparado ao original (10%)
imagejpeg($image, "certificado-". date("Y-m-d") . "(1).jpg", 10);

imagedestroy($image);

?>