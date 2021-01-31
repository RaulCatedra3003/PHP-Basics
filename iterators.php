<?php
  //Generate a snippet that makes use of for
  for ($i = 0; $i < 10; $i++) {
    echo $i;
  }
  echo '<br>';
  echo '<br>';

  //Generate a snippet that makes use of foreach
  $array = array(1,2,3,4);
  foreach($array as $valor) {
    echo $valor;
  }
  echo '<br>';
  echo '<br>';

  //Generate a snippet that uses while
  $i = 0;
  while ($i < 10) {
    echo $i++;
  }
  echo '<br>';
  echo '<br>';

  //Generate a snippet that uses do while
  $i = 0;
  do {
      echo $i;
  } while ($i > 0);
  echo '<br>';
  echo '<br>';
?>
