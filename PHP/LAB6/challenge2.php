<?php 
echo '<h2>Challenge 2: Print Names In Uppercase</h2>';

function printNamesToUpperCase () {
    $names = ['Alice', 'Bob', 'Charlie', 'David'];
    
    foreach ($names as $name) {
        echo strtoupper ($name) . '<br>';
        continue;
    }
}

printNamesToUpperCase();