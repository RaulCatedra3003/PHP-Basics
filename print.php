<?php
  //Generate an instruction that makes use of "echo"
  echo 'I have use echo "Hello world"';
  echo '<br>';
  echo '<br>';

  //Generate an instruction that makes use of "print"
  print('I have use print("Hello world")');
  echo '<br>';
  echo '<br>';

  //Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
  $array = array('m' => 'mono', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
  print_r($array);
?>