<?php

$json = '[{"nome":"Joao","idade":25},{"nome":"Glaucio","idade":20}]';
$data = json_decode($json, true);

var_dump($data);

?>