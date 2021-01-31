<?php
  //Print a text string
  echo 'Hello';
  echo '<br>';
  echo '<br>';

  //Print a text string that interpret variables
  $a = 'world';
  echo "Hello $a";
  echo '<br>';
  echo '<br>';

  //Concatenate a previously declared variable in a text string
  $b = 'Raúl';
  echo "Hello, mi name is $b";
  echo '<br>';
  echo '<br>';

  //Execute the function that allows you to replace text in a string (case sensitive)
  $c = 'Hello, mi name is Raúl';
  echo str_replace('Raúl', 'Manolo', $c);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
  $d = 'Hello, mi name is Manolo';
  echo str_ireplace('manolo', 'Antonio', $d);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows you to write a text N times
  $e = 'Hello world,';
  echo str_repeat($e, 5);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows to obtain the length of a text string
  $f = 'Hello world';
  echo strlen($f);
  echo '<br>';
  echo '<br>';

  //Executes the function that allows to obtain the position of the first occurrence of a text within a text string
  $g = 'Hello, my name is Raúl, and my brothers name is manolo';
  echo strpos($g, 'name');
  echo '<br>';
  echo '<br>';

  //Execute the function that allows a text string to be capitalized
  $h = 'hello world';
  echo strtoupper($h);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows you to transform a text string to lowercase
  $i = 'HELLO WORLD';
  echo strtolower($i);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows to obtain a text substring from the position
  $j = 'This is the last strings exercise';
  echo substr($j, 7, 26);
  echo '<br>';
  echo '<br>';
?>