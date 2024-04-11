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

function wordInput($css_state="standard", $value="") {
  

  for ($i = 1; $i <=5; $i++) {
    checkInput($i, $css_state="standard", $value="");
    
  }
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
  // change
  echo '<input type="Submit" value="Guess"><br>';
}
function checkInput($word, $i, $css_state="standard", $value="") {
  $guessWordArray = str_split($word);
  if (!isset($_POST["letter_".$i]) and empty($_POST["letter_".$i])){
  echo '<input type="text" name="letter_' . $i . '" maxlength="1" size="1" class="' . $css_state . '" value="' . $value .'">'; 
  }
  elseif (isset($_POST["letter_".$i]) and !empty($_POST["letter_".$i])){
    if ($word[$i-1] == $_POST["letter_".$i]) {
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



// function wordInput($word) {
//   $guessWordArray = str_split($word);
//   switch (TRUE) {
//     case (!isset($_POST["letter_1"]) and empty($_POST["letter_1"])):
//       generateInput($i=1);
//     case (!isset($_POST["letter_2"]) and empty($_POST["letter_2"])):
//       generateInput($i=2);
//     case (!isset($_POST["letter_3"]) and empty($_POST["letter_3"])):
//       generateInput($i=3);
//     case (!isset($_POST["letter_4"]) and empty($_POST["letter_4"])):
//       generateInput($i=4);
//     case (!isset($_POST["letter_5"]) and empty($_POST["letter_5"])):
//       generateInput($i=5);
//   }
  

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

