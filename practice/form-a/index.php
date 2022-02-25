<?php
session_start();

if (isset($_SESSION['results'])) {
    $results =$_SESSION['results'];
    $inputSring = $results['inputString'];
    $isPalindrome = $results['isPalindrome'];
    $vowelCount = $results['vowelCount'];

    $_SESSION['results'] = null;
}
    require 'index-view.php';