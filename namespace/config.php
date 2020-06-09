<?php

spl_autoload_register(function($nameClass){

    $dirClass = "class";
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";
    $filename = str_replace ("\\", "/", $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php");
    //if (file_exists($filename) === true) {
    //file exists ja traz uma resposta true ou false, tornando a comparacao desnecessaria

    if (file_exists($filename)) {

        require_once($filename);

    }


    

});

?>