<?php

session_id("b76d8ba78180241aa3818765c8de4395");

require_once "config.php";

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>