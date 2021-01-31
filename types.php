<?php
  /* This file as its name properly indicates will be used for working with the different basic types of variables and data:
  Define a new variable and assign a value to each of the following types: */

  //Boolean
  $boolean = true;
  var_dump($boolean);
  echo '<br>';
  echo '<br>';

  //Integer
  $integer = 1;
  var_dump($integer);
  echo '<br>';
  echo '<br>';

  //float
  $float = 1.5;
  var_dump($float);
  echo '<br>';
  echo '<br>';

  //string
  $string = 'Hello';
  var_dump($string);
  echo '<br>';
  echo '<br>';

  //array
  $array = array(1,2,3,4,5);
  var_dump($array);
  echo '<br>';
  echo '<br>';

  //object
  class Obj {
    public $key = 0;
  }
  $obj = new Obj;
  var_dump($obj);
  echo '<br>';
  echo '<br>';

  //NULL
  $bar = null;
  var_dump($bar);
  echo '<br>';
  echo '<br>';
?>