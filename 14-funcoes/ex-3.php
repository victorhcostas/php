<?php

function ola($texto, $periodo = "Bom dia") {
    return "Ola $texto! $periodo!<br>";
}

echo ola("");
echo ola("Glaucio", "Boa Tarde");
echo ola("Joao", "Boa Noite");
echo ola("Joao", "");

?>