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
}


// function wordInput($letter_index, $css_state, $value) {
//   echo '<input type="text" name="letter_' . $letter_index . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">';

// }

// function wordInput($css_state="standard", $value="") {
  

//   for ($i = 1; $i <=5; $i++) {
//     checkInput($i, $css_state="standard", $value="");
//   }
//   echo '<input type="Submit" value="Guess"><br>';
// }

function splitWord($word) {
  $guessWordArray = str_split($word);
  return $guessWordArray;
}
// , $second, $third, $fourth, $fifth, 
function letterCheck($first, $word) {
  switch (true) {
    case $first == $word[0]:
      echo "True";
      $css_state="correct";
  }
}

function inputGenerator($index, $css_state, $value, $word) {
  
  echo '<input type="text" name="letter_' . $index . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'" required>'; 
  if ($value == $word[0]) {
    echo "True";
    $css_state="correct";
  }
      
  }
   //   if ($word[intval($i)-1] == $_POST["letter_".$i]) {
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   }
  //   else {
  //     $css_state = "wrong";
  //     $value = $_POST["letter_".$i];
  //     }
  
  // }


function wordInput($css_state="standard", $value="") {
  $i = 0;
  do {
    checkInput($i, $css_state="standard", $value="");
    $i++;

  } while (!isset($_POST["letter_".$i]) and empty($_POST["letter_".$i]) and $i < 5);

  echo '<input type="Submit" value="Guess"><br>';
}


function checkInput($word, $i, $css_state="standard", $value="") {
  $guessWordArray = str_split($word);

  echo '<input type="text" name="letter_' . $i . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">'; 
  
  if (isset($_POST["letter_".$i]) and !empty($_POST["letter_".$i])){


    if ($guessWordArray[intval($i)] == $_POST["letter_".$i]) {
      $css_state = "correct";
      $value = $_POST["letter_".$i];
    }
    else {
      $css_state = "wrong";
      $value = $_POST["letter_".$i];
      }
  echo '<input type="text" name="letter_' . $i . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">'; 
  }
}

  // 
  // for ($i = 1; $i <=5; $i++) {
  // if (isset($_POST["letter_".$i]) and !empty($_POST["letter_".$i])){
  //   if ($word[$i-1] == $_POST["letter_".$i]) {
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   }
  //   else {
  //     $css_state = "wrong";
  //     $value = $_POST["letter_".$i];
  //     }
  //   }
  // }
  // for ($i = 1; $i <=5; $i++) {
  //   echo '<input type="text" name="letter_' . $i . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">';
  // }
  // if (isset($_POST["letter_1"]) and !empty($_POST["letter_1"])){
  //   if ($word[0] == $_POST["letter_1"]) {
  //     $css_state = "correct";
  //     $value = $_POST["letter_1"];
  //   }
  //   else {
  //     $css_state = "wrong";
  //     $value = $_POST["letter_1"];
  //   }
  // }
  // echo '<input type="Submit" value="Guess"><br>';



  // switch (TRUE) {
  //   case ($guessWordArray[0] == $_POST["letter_".$i]):
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   case ($guessWordArray[1] == $_POST["letter_".$i]):
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   case ($guessWordArray[2] == $_POST["letter_".$i]):
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   case ($guessWordArray[3] == $_POST["letter_".$i]):
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  //   case ($guessWordArray[4] == $_POST["letter_".$i]):
  //     $css_state = "correct";
  //     $value = $_POST["letter_".$i];
  // }
  

//   echo '<input type="Submit" value="Guess"><br>';
// }

// function wordInput($css_state, $value, $word) {
//   $guessWordArray = str_split($word);
//   echo '<input type="text" name="letter_1" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">';
//   if (isset($_POST["letter_1"]) and !empty($_POST["letter_1"])){
//       if ($word[0] == $_POST["letter_1"]) {
        
//         $css_state = "correct";
//         $value = $_POST["letter_1"];
//       }
//       else {
//         $css_state = "wrong";
//         $value = $_POST["letter_1"];
//         }
    
  
//     echo '<input type="Submit" value="Guess"><br>';
// }
// }

function guessWord($word) {
  
  $guessWordArray = str_split($word);
  
  for ($i = 1; $i <=5; $i++) {
    wordInput($i, "standard", "");
    if (isset($_POST["letter_".$i]) and !empty($_POST["letter_".$i])){
      // checkWord($word);
      if ($word[$i-1] == $_POST["letter_".$i]) {
        wordInput($i-1, "correct", $_POST["letter_".$i]);
      }
      else {
        echo "&#9587;";
      }
    }
  }
  echo '<input type="Submit" value="Guess"><br>';
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

