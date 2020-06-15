<?php

//$file = fopen("log.txt", "w+");
$file = fopen("log.txt", "a+");

fwrite($file, date("e Y-m-d H:i:s" . "\r\n"));

fclose($file);

echo "Arquivo criado com sucesso!";

?>