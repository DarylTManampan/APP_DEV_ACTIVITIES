<?php
//Names Challenge

$names = ['ALEC', 'BETH', 'CAROLINE', 'DAve', 'ElAnor', 'ANNa', 'Freddie', 'AdaM'];

foreach ($names as $result) {
    if (strtoupper($result[0]) === 'A') {
        continue; 
    }
    echo strtolower(strrev($result)) . '<br>';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>LAB 5</title>
</head>

</html>