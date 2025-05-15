<?php 
echo '<h2> Challenge 3: Find the longest word </h2>';

function findLongestWord ($sentence) {
    $words = explode (" ", $sentence);
    $longestWord = "";

    foreach ($words as $word) {
        if (strlen ($word) > strlen ($longestWord)) {
            $longestWord = $word;
        }
    }
    return $longestWord;
}

$sentence = "The quick brown fox jumped over the lazy dog";
$longestWord = findLongestWord ($sentence);
echo $longestWord;