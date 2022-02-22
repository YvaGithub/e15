<?php

class StringProcessor
{
 
# We will see Properties of that class the property will be prepend by the access modifier public that tells how we want to use the property
    public $inputString;

    # We will se Methods of that class. Methods are usually capability of the class, meaning what they can do
    public function __contruct($inputString)
    {
        $this->inputString = $inputString;
    }
    
    public function isPalindrome($inputString)
    {
        if (strrev($inputString) == $inputString) {
            return true;
        } else {
        }
        return false;
    }
    public function NumberofVowels($inputString)
    {
        return substr_count($inputString, 'a')+substr_count($inputString, 'e')+substr_count($inputString, 'i')+substr_count($inputString, 'o')+substr_count($inputString, 'u');
    }
}