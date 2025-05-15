<?php
//Challenge 2: Colors array
echo '<h3>Colors Array</h3>';
//Given array color value
$colors = ['red', 'blue', 'green', 'yellow'];  //don't make  any changes on this to do the challenge!

sort($colors);

$colors[] =[ 'purple' , 'orange'];
array_unshift( $colors,'Red Apple');

echo'<pre>';
var_dump($colors);
echo'</pre>';

$colors[array_search('green', $colors)] = 'Green mango';

print_r($colors);