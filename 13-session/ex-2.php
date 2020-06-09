<?php

require_once "config.php";

//libera TODAS as variaveis das sessoes
session_unset();

echo $_SESSION['nome']; 

//limpa TODAS as variaveis das sessoes e expulsa o usuario
session_destroy();

echo "<br>";

echo $_SESSION['nome'];

?>