<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
</head>

<body>

    <h1>Project 1</h1>

    <form method='POST' action='process.php'>
        <label for='inputString'>Type Your Word:</label>
        <input type='text' name='inputString' id='inputString'>
        <button type='submit'>Check the result</button>
    </form>

    <h1> Results:</h1>

    <?php if ($isPalindrome) { ?>
    <h3>The word is a palindrome.</h3>
    <?php } else { ?>
    <h3>The word is not a palindrome.</h3>
    <?php } ?>

    <h3>There is/are <?php echo $vowelCount; ?> vowel(s) in this word.</h3>

</body>

</html>