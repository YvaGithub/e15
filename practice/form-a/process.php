<?php
session_start();

$inputString = $_POST['inputString'];

$isPalindrome = isPalindrome($inputString);
$vowelCount = NumberofVowels($inputString);

$_SESSION['results'] =[
    'inputString' => $inputString,
    'isPalindrome' => isPalindrome($inputString),
    'vowelCount' => NumberofVowels($inputString)
];
header('Location: index.php');

function isPalindrome($inputString)
{
    if (strrev($inputString) == $inputString) {
        return true;
    } else {
    }
    return false;
};
function NumberofVowels($inputString)
{
    return substr_count($inputString, 'a')+substr_count($inputString, 'e')+substr_count($inputString, 'i')+substr_count($inputString, 'o')+substr_count($inputString, 'u');
};