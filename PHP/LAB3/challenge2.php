<?php
//Challenge 2: Get the sum of the numbers in an array by using a foreach loop and for loop.
echo '<h3> Sum of An Array </h3>';

$numbers = [1, 2, 3, 4, 5]; //sum using foreach loop
$num2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 19]; //sum using for loop
$sum = 0;
$sum2 = 0;

foreach ($numbers as $number) {
  $sum += $number;
}
echo ' Sum of array using foreach loop: ' . '<br>' . " $sum ";
echo '<br>';

for($i = 0; $i < count ($num2); $i++) {
    $sum2 += $num2 [$i];
  }
  echo ' Sum of array using for loop: ' . '<br>' ." $sum2 ";

