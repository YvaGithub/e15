<?php

$inputString = $_GET['inputString'];

$isPalindrome = Palindromecheck($inputString);

require 'process-view.php';


function Palindromecheck($string)
{
    if (strrev($string) == $string) {
        return 1;
    } else {
        return 0;
    }
}