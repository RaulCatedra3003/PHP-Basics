<?php
  //It generates a function that given two numbers returns the sum of both
  function sum($num1, $num2) {
    return $num1 + $num2;
  }
  echo "3 + 5 = ".sum(3,5);
  echo '<br>';
  echo '<br>';

  //It generates a function that given two numbers returns the multiplication of both
  function mult($num1, $num2) {
    return $num1 * $num2;
  }
  echo '3 * 5 ='.mult(3,5);
  echo '<br>';
  echo '<br>';

  //It generates a function that given two numbers returns the division of both
  function div($num1, $num2) {
    return $num1 / $num2;
  }
  echo '15 / 3 ='.div(15,3);
  echo '<br>';
  echo '<br>';

  //It generates a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.
  function math($num1, $num2, $operator) {
    switch ($operator) {
      case '+':
        return sum($num1, $num2);
        break;
      case '-':
        return $num1 - $num2;
        break;
      case '*':
        return mult($num1, $num2);
        break;
      case '/':
        return div($num1, $num2);
        break;
      case '%':
        return $num1 % $num2;
        break;
      default:
        return 'this operation does not exist';
        break;
    }
  }
  echo '10 % 4 ='.math(10, 4, '%');
  echo '<br>';
  echo '<br>';
?>