<?php
$wordList = ["TISCH", "LAMPE", "RASEN", "KARTE", "BLUME",
"LEERE", "WOLKE", "STERN", "GLANZ", "FLUSS",
"KREIS", "BLATT", "TRAUM", "RUNDE", "LACHS",
"PFEIL", "OZEAN", "MUSIK", "GESTE"];

function splitWords($list) {
  $wordSplitArray = []; // empty array
  

  
  foreach ($list as $word) {  // all values from the array $wordList are split into arrays by letter
      $splitWord = str_split($word);
      array_push($wordSplitArray, $splitWord); // letter arrays are pushed into empty array $wordSplitArray
  }
  return $wordSplitArray; // return the 2d array of words split into letters
}

function arrayOutput($array_variable) { // all inner arrays are printed
  foreach ($array_variable as $line) {
      foreach ($line as $content) {
          echo $content . ""; // inner arrays printed without space
      }
      echo " "; // outer arrays divided by space
  }
}

function randomWord($array_variable) {
  $wordNumber = count($array_variable);
  $randomWordSelect = random_int(0, count($array_variable)-1);
  foreach ($array_variable[$randomWordSelect] as $singleWord) {
    yield $singleWord;
  }

  
  // return $array_variable[$randomWordSelect][0];
}
function guessWord($word) {
  $guessWordArray = str_split($word);
  for ($i = 1; $i <=5; $i++) {
    if (isset($_POST["letter_".$i]) and !empty($_POST["letter_".$i])){
      // checkWord($word);
      if ($word[$i-1] == $_POST["letter_".$i]) {
        echo "&#10003;";
      }
      else {
        echo "&#9587;";
      }
    }
    else {
      echo "<br>Try a word";
    }
  }
}

function checkWord($word) {
  for ($i = 0; $i <=4; $i++) {
    if ($word[$i] == $_POST["letter_".$i+1]) {
      echo "&#10003;";
    }
    else {
      echo "&#9587;";
    }

  }

  
}

// echo '<pre>';
// print_r ($array_variable);
// echo '</pre>';

