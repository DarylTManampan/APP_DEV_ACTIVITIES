<?php
//Divisble Challenge

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . ' is divisible to 3 and 5' . '<br>';
    } elseif ($i % 3 == 0) {
        echo $i . ' is divisible to 3' . '<br>';
    } elseif ($i % 5 == 0) {
        echo $i . ' is divisible to 5' . '<br>';
    } else {
        echo $i . '<br>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>LAB 4</title>
</head>

</html>
