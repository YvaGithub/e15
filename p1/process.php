<?php
session_start();

$inputString = $_POST['inputString'];

$isPalindrome = Palindromecheck($inputString);
$vowelCount = NumberofVowels($inputString);

function Palindromecheck($inputString)
{
    if (strrev($inputString) == $inputString) {
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

$_SESSION[''];
header('Location: index.php');