<?php
  //Create a simple condition that evaluates whether the current day is Monday. Only in the case that the condition is met, it shows a message of “We are on Monday”.
  $day = date('D');
  if($day == 'Mon') {
    echo 'We are on Monday';
  } else {
    echo 'We are not on Monday';
  }
  echo '<br>';
  echo '<br>';

  //Create a simple condition that evaluates whether the current month is October. If the condition is met, it shows a message of the type "We are in October". Otherwise, if this condition is not met, show the current month in words as it come from DateTime.
  $month = date('M');
  if($month == 'Oct') {
    echo 'We are in October';
  } else {
    echo "We are in $month";
  }
  echo '<br>';
  echo '<br>';

  //Create a double condition that evaluates: If the current minute is less than 10. Displays a message of type "the current minute is less than 10", if the current minute is greater than 15, displays a message of the type "the current minute is more than 15". If you do not meet any of the two conditions above: Displays a message of the type "does not meet any conditions”
  $minute = date('i');
  if($minute < 10) {
    echo 'The current minute is less than 10';
  } elseif ($minute > 15) {
    echo 'The current minute is more than 15';
  } else {
    echo 'Does not meet any conditions';
  }
  echo '<br>';
  echo '<br>';

  //Create a switch type control structure to display a different message depending on the current day of the week. You can write any type of message, because the important thing is that you understand how it works and in what cases you can use it.
  switch (date('D')) {
    case 'Mon':
      echo 'Today is Monday';
      break;
    case 'Tue':
      echo 'Today is Tuesday';
      break;
    case 'Wed':
      echo 'Today is Wednesday';
      break;
    case 'Thu':
      echo 'Today is Thursday';
      break;
    case 'Fri':
      echo 'Today is Friday';
      break;
    case 'Sat':
      echo 'Today is Saturday';
      break;
    case 'Sun':
      echo 'Today is Sunday';
      break;
    default:
      echo 'Is today new day?';
      break;
  }
  echo '<br>';
  echo '<br>';
?>