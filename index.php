<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Course</title>
  </head>
  <body>
    <h1>PHP Course</h1>
    <h2>Understanding Variables</h2>
    <?php
      $characterName = "Matt";
      $characterAge = 80;
      echo "There once was a man named $characterName <br>";
      echo "He was $characterAge years old <br>";
      echo "He really liked the name $characterName <br>";
      echo "But didn't like being $characterAge years old <br>";
    ?>
    <h2>Data Types</h2>
    <?php
      $phrase = "To be or not to be"; // String
      $age = 30; // Integer
      $gpa = 3.4; // Float
      $isMale = true; // Boolean
      $nothing = null; // null
    ?>
    <h2>Working with strings</h2>
    <?php
      $phrase = "Giraffe Academy <br>";
      $phraseLower = strtolower($phrase); // converting the string to Lower Case
      $phraserUpper = strtoupper($phrase); // converting the string to Upper Case
      $phraseLength = strlen($phrase); // catching the length of the string
      $phraseFirsCharacter = $phrase[0]; // catching the first character of the string
      $phraseReplaced = str_replace("Giraffe", "Panda", $phrase); //replacing the word Giraffer with the word Panda
      $phraseSubstring = substr($phrase, 8, 3); // Grabbing a substring of the phrase starting o the character number eight and grabbing 3 characters
      echo $phrase;
      echo $phraseLower;
      echo $phraserUpper;
      echo $phraseLength . "<br>";
      echo $phraseFirsCharacter . "<br>";
      echo $phraseReplaced;
      echo $phraseSubstring;
    ?>
    <h2>Working with numbers</h2>
    <?php
        $integerNumber = 40;
        $floatNumber = $40.50;
     ?>
  </body>
</html>
