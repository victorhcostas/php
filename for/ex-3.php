<?php

/*for ($i=date("Y"); $i>=date("Y")-100; $i--) {

  echo $i . "<br>";

}*/

echo "<select>";

for ($i=date("Y"); $i>=date("Y")-100; $i--) {
  if ($i >= 1980){
    echo '<option value="'.$i.'">'.$i.'</option>';
  }
}

echo "</select>";

?>