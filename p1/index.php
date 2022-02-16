<?php
session_start();

if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];

    $answer = $results['inputString'];
    $vowelCount = $results['inputString'];

    $_SESSION[''] = null;
}
require 'index-view.php';