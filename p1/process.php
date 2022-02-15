<?php

$inputString = $_GET['inputString'];

$isPalindrome = Palindromecheck($inputString);
$vowelCount = NumberofVowels($inputString);

function Palindromecheck($string)
{
    if (strrev($string) == $string) {
        return 1;
    } else {
        return 0;
    }
}
// Let's count the vowels in the string
function NumberofVowels($inputString)
{
    return substr_count($inputString, 'a')+substr_count($inputString, 'e')+substr_count($inputString, 'i')+substr_count($inputString, 'o')+substr_count($inputString, 'u');
}

require 'process-view.php';