<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">


<?php 

    include "wordle_functions.php";
    $array_variable = splitWords($wordList);
    arrayOutput($array_variable);
?>
<br>
<br>
<?php 
    $randomWord = randomWord($array_variable);
    foreach ($randomWord as $letter) {
        echo $letter;
    }
    $randomWordTest = "TISCH";
    echo "<br>";
    
    echo $randomWordTest;
    
?>
<br><br>
<input type="Text" name="letter_1" maxlength="1" size="1">
<input type="Text" name="letter_2" maxlength="1" size="1">
<input type="Text" name="letter_3" maxlength="1" size="1">
<input type="Text" name="letter_4" maxlength="1" size="1">
<input type="Text" name="letter_5" maxlength="1" size="1">
<input type="Submit" value="Guess"/>
<?php 
guessWord($randomWordTest);
?>

</body>
</html>