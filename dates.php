<?php
  //Instance the Date Time class and then invoke the format method with the argument “Y-m-d” to show year-month-day
  $date = date('Y-m-d');
  echo $date;
  echo '<br>';
  echo '<br>';

  //Get the current date in any format
  echo date('d-m-Y');
  echo '<br>';
  echo '<br>';

  //Get the current day
  echo date('d');
  echo '<br>';
  echo '<br>';

  //Get the current month in numerical format (1-12)
  echo date('m');
  echo '<br>';
  echo '<br>';

  //Get the current minute with leading zeros (00 - 59)
  echo date('i');
  echo '<br>';
  echo '<br>';
?>