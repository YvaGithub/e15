<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
</head>

<body>
    <form method='POST' action='process.php'>
        <h1>Project 1</h1>

        <p>Check here to see whether your word is a palindrome or not and how many vowels does it contain</p>

        <label for='inputString'>Text Entry:</label>
        <input type='text' name='inputString' id='inputString'>

        <button type='submit'>Submit</button>
    </form>

    <h1>Results</h1>


    <?php if ($isPalindrome) { ?>
    The word is a palindrome
    <?php } else { ?>
    The word is not a palindrome
    <?php } ?>

    There are <?php echo $vowelCount; ?> vowel(s) in this word.



</body>

</html>