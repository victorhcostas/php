<?php

$data = array(
    "empresa"=>"Hcode Treinamentos"
);
//define o cookie, o decodifica para JSON e define o tempo que ele ficara na
//maquina do usuario
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK!";

?>