<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {

    //abre o aquivo ja existente na pasta
    $file = fopen($filename, "r");

    //transforma o arquivo .csv em array
    $headers = explode(",", fgets($file));

    $data = array();

    while ($row = fgets($file)) {

        $rowData = explode(",", $row);
        $linha = array();

        for ($i = 0; $i < count($headers); $i++) {

            $linha[$headers[$i]] = $rowData[$i];

        }

        array_push($data, $linha);

    }

    fclose($file);

    echo json_encode($data);

}

?>