<?php 
echo '<h2>Challenge 1: Fahrenheit to Celsius</h2>';

$fahrenheitToCelsius = fn ($fahrenheit) => ($fahrenheit - 32) * 5 / 9;
$fahrenheit = 68;
$celsius = $fahrenheitToCelsius($fahrenheit);

echo $fahrenheit . "&deg;F = " . $celsius . "&deg;C";