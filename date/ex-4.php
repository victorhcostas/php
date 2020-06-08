<?php

//define as informacoes do locale
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//formata a data e a hora conforme o locale do servidor
echo ucwords(strftime("%A %B"));

?>