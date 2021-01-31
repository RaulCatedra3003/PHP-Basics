<?php
  //Create an example of use for arithmetic operators: +, -, *, /, and%
  $a = 2;
  $b = 3;
  echo $a + $b;
  echo '<br>';
  echo $a - $b;
  echo '<br>';
  echo $a * $b;
  echo '<br>';
  echo $a / $b;
  echo '<br>';
  echo $a % $b;
  echo '<br>';
  echo '<br>';

  //Create a usage example for comparison operators: ==,! =, <,>, <=,> =
  var_dump($a == $b);
  echo '<br>';
  var_dump($a > $b);
  echo '<br>';
  var_dump($a < $b);
  echo '<br>';
  var_dump($a >= $b);
  echo '<br>';
  var_dump($a <= $b);
  echo '<br>';
  var_dump($a != $b);
  echo '<br>';
  echo '<br>';
  echo '<br>';

  //Create an example of use for logical operators: &&, And; ||, Or; ! (NOT); Xor
  var_dump($a < 2 && $b > 2);
  echo '<br>';
  var_dump($a < 2 || $b > 2);
  echo '<br>';
  var_dump(!($a < 2 && $b > 2));
  echo '<br>';
  var_dump(!($a < 2 || $b > 2));
?>