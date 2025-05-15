<?php 
//Challenge 1: Multiplication Table
echo '<h3> Multiplication Table </h3>';

$size = 10;

for ($i = 1; $i <= $size; $i++) {
    
    for ($j = 1; $j <= $size; $j++) {
        echo "$i x $j = " . ($i * $j) . "\t";
        echo '<br>';
    }
    echo '<br>';
  }