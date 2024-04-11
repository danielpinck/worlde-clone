<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    .correct {
      background-color: rgb(56, 211, 85);    
    }

    .standard {
    background-color: white;
    }

    .wrong {
    background-color: rgb(219, 54, 54);
    }
  </style>
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
    $testWord = splitWord($randomWordTest);
    echo "<br>" . $testWord[0];
    $testLetter = $testWord[0];
      
  ?>
  <br><br>
  <?php 
  // if (isset($_POST["letter_1"]) and isset($_POST["letter_2"]) and isset($_POST["letter_3"]) and isset($_POST["letter_4"]) and isset($_POST["letter_5"])
  // and !empty($_POST["letter_1"]) and !empty($_POST["letter_2"]) and !empty($_POST["letter_3"]) and !empty($_POST["letter_4"]) and !empty($_POST["letter_5"])){
    if (!isset($_POST["letter_1"]) and empty($_POST["letter_1"])){
  
  //hier müssen die Informationen aus der $_POST Variable in die Datei geschrieben werden
  //...wenn die Felder gesetzt sind...
  // letterCheck($_POST["letter_1"], $testWord[0]);
  inputGenerator(1, "standard", $_POST["letter_1"], $testLetter);

    }
  ?>
  <br>
  <?php 
  
    // wordInput($css_state, $value, $word)
    // wordInput($randomWordTest);
    // inputGenerator($index, $css_state="standard", $value, $letter, $word)
    
    // inputGenerator(2, $css_state="standard", "");
    // inputGenerator(3, $css_state="standard", "");
    // inputGenerator(4, $css_state="standard", "");
    // inputGenerator(5, $css_state="standard", "");
    echo '<input type="Submit" value="Guess"><br>';
  ?>
  </form>
</body>
</html>