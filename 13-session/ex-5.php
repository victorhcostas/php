<?php

require_once "config.php";

echo session_save_path();

echo "<br>";

echo var_dump(session_status());

switch (session_status()) {

  case PHP_SESSION_DISABLED:
    echo "sessoes desabilitadas";
  break;

  case PHP_SESSION_NONE:
    echo "sessoes habilitadas, mas nenhuma existe";
  break;

  case PHP_SESSION_ACTIVE:
    echo "sessoes habilitadas, e uma existe";
  break;

}

?>