<?php
function checkEvenOrOdd($number) {
 if ($number %2 == 0) {
    return "$number is Even";
 } else {
    return "number is Odd";
 }
}
 $start = 1;
 $end = 10;
  echo "checking numbers from $start to $end:<br><br>";
  for($i = $start; $i <= $end; $i++) {
    echo checkEvenOrOdd($i) . "<br>";
  }

sum(10 , 11.3);

?>