<?php

$name = "images";

//vai testar se o diretorio existe
if (!is_dir($name)) {
    //se nao existir, criara um novo diretorio
    mkdir($name);
    echo "Diretorio $name criado com sucesso!";

} else {
    //se existir, o removera
    //rmdir($name);
    echo "Ja existe o diretorio: $name foi removido!"; 

}

?>