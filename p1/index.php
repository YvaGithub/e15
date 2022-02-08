<?php


// How determine whether a string is a pallindrome in php
// Using strrev() that essentially reads the string backwards too
function Palindromecheck($string)
{
    if (strrev($string) == $string) {
        return 1;
    } else {
        return 0;
    }
}
 // Esope reste ici et se repose = Esope stays here and he is resting
$test = "esoperesteicietserepose";
if (Palindromecheck($test)) {
    echo "Yes, it is a Palindrome!";
} else {
    echo "Sorry, it is not a Palindrome. Try again!";
}

// Let's count the vowels in the string

function NumberofVowels($String)
{
    return substr_count($String, 'a')+substr_count($String, 'e')+substr_count($String, 'i')+substr_count($String, 'o')+substr_count($String, 'u');
}
echo "There is/are:";
echo NumberofVowels('how many vowels in me'); echo "vowel(s)";

require 'index-view.php';