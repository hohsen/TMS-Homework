<?php

function countWordFrequency($text){
    $words = explode(' ', $text);
    asort($words);
    $result = array_count_values($words);
    return $result;
}

$wordFrequency = countWordFrequency('text text text1 text1 text2 text2 text2 a c c d c d');
echo '<pre>';
print_r($wordFrequency);
echo '</pre>';
