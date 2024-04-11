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

  </style>
</head>
<body>
  


  <?php 

    include "wordle_functions.php";
    $array_variable = splitWords($wordList);
    arrayOutput($array_variable);
  ?>
  <br>
  <br>
  <?php 
    $randomWordTest = "TISCH";
    echo "<br>";
    echo $randomWordTest;
    $testWord = splitWord($randomWordTest);
    echo "<br>" . $testWord[0];      
  ?>
  <br><br>
  <?php 
    function letterChecker($first, $word, $class) {
      if ($first == $word[0]) {
          $class = "correct";
      }
    }
    
    function inputGenerate($class) {
    
      echo '<input type="text" name="letter_1" maxlength="1" size="1" class="' . $class . '" value="" required>'; 

      }
      
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // If the form has been submitted, check the first letter
      $first_letter = $_POST["letter_1"]; // Access POST data after form submission
      letterChecker($first_letter, $testWord);
    }
    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post">';
    inputGenerate();
    echo '<input type="submit" value="Guess"><br>';
    echo '</form>';
?>
</body>
</html>