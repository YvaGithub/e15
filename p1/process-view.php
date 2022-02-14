<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>

</head>

<body>
    <h1>Project 1</h1>
    <form method='GET' action='process.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: kiumppn</p>
        <p>Hint: Halloween’s favorite fruit</p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if ($test) { ?>
    You got it correct!
    <?php } else { ?>
    Sorry, incorrect. <a href='index.php'> Please try again...</a>

    <?php } ?>

</body>

</html>