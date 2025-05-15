<?php
//Challenge 1: Sum of an array
$numbers = [1,2,3,4,5];
$sum = array_sum($numbers);
$quantity = count($numbers);

echo '<h3> Sum of An Array</h3>';
$output = 'The Sum of the ' .$quantity. ' numbers is: ' .$sum;
echo $output;
