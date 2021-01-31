<?php
  //Define a simple array composed of text strings
  $a = array('hello', 'world');
  print_r($a);
  echo '<br>';
  echo '<br>';

  //Define a simple array consisting of whole numbers and decimal numbers
  $b = array(1,2,3,1.2,1.3);
  print_r($b);
  echo '<br>';
  echo '<br>';

  //Define a multidimensional array
  $c = array(array(1,2,3), array(4,5,6));
  print_r($c);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows to obtain the length of an array
  $d = array(1,2,3,4,5);
  echo count($d);
  echo '<br>';
  echo '<br>';

  //Execute the function that allows to obtain the combination of two arrays
  $e1 = array('hello', 'my name');
  $e2 = array('is', 'Raúl');
  print_r(array_merge($e1, $e2));
  echo '<br>';
  echo '<br>';

  //Execute the function that once is given an array return the last element of it
  $f = array(1,2,3,4);
  echo array_pop($f);
  echo '<br>';
  echo '<br>';

  //Execute the function that once is given an array add a new element to the array in question
  $g1 = array('Hello my', 'name is');
  $g2 = 'Raúl';
  array_push($g1, $g2);
  print_r($g1);
  echo '<br>';
  echo '<br>';
?>