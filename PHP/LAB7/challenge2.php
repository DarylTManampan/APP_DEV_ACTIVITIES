<?php
//Lab7 Challenge 2

class StringUtility {
    public static function shout($string) {
        return strtoupper($string);
    }

    public static function whisper($string) {
        return strtolower($string);
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string . " ", $times - 1) . $string;
    }
}

$stringUtility = new StringUtility();

echo $stringUtility->shout('Hello World');

echo '<br>';
echo $stringUtility->whisper('Hello World');

echo '<br>';
echo $stringUtility->repeat('Hello World');

echo '<br>';
echo $stringUtility->repeat('Hello World', 5);
echo '<br>';
