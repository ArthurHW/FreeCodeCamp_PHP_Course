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
        $floatNumber = 40.50;
        // Operations: +, *, -, /, %
        $num = 10;
        echo $num++; // increment
        echo "<br>";
        echo $num--; // decrement
        echo "<br>";
        echo $num += 25;
        echo "<br>";
        echo $num -= 10;
        echo "<br>";
        echo abs(-100); // absolute value
        echo "<br>";
        echo pow(2, 4); // power function
        echo "<br>";
        echo sqrt(144); // square root
        echo "<br>";
        echo max(2, 10); // returns the bigger value
        echo "<br>";
        echo min(2, 10); // return the smaller number
        echo "<br>";
        echo round(3.2); // rounds the number to the nearest integer
        echo "<br>";
        echo ceil(3.3); // round the number up
        echo "<br>";
        echo floor(3.9); // rounds the number down
        echo "<br>";
     ?>
     <h2>Getting User Input</h2>
      <!-- <form class="" action="index.php" method="get">
        <fieldset class="personal-data">
          <label for="name-input">Name: </label>
          <input type="text" name="name" id="name-input">
          <label for="age-input">Age: </label>
          <input type="number" name="age" id="age-input">
        </fieldset>
        <button type="submit">Submit</button>
      </form> -->
      <br>
      <?php
        echo "Your name is: ";
        echo $_GET["name"];
        echo "<br>";
        echo "Your age is: ";
        echo $_GET["age"];
       ?>
       <h2>Building a basic calculator</h2>
       <!-- <form action="index.php" method="GET">
          <input type="number" name="first-number">
          <br>
          <input type="number" name="second-number">
          <button type="submit">Calculate</button>
       </form> -->
       Answer:
       <?php
          echo $_GET["first-number"] + $_GET["second-number"];
       ?>
       <h2>Building a mad libs game</h2>
       <!-- <form action="index.php" method="GET">
         Color: <input type="text" name="color"> <br>
         Plural Noun: <input type="text" name="pluralNoun"> <br>
         Someone: <input type="text" name="someone"> <br>
         <button type="submit">Submit</button>
       </form> -->
       <?php
          $color = $_GET["color"];
          $pluralNoun = $_GET["pluralNoun"];
          $someone = $_GET["someone"];
          echo "Roses are $color <br>";
          echo "$pluralNoun are blue <br>";
          echo "I love  $someone<br>";
       ?>
       <h2>URL parameters</h2>
       <!-- <form action="index.php" method="GET">
          Name: <input type="text" name="name"> <br>
          <button type="submit">Submit</button>
       </form> -->
       <br><br>
       <?php
        echo $_GET["name"];
        ?>

        <h2>POST vs GET</h2>
        <!-- <form action="index.php" method="POST">
           Password: <input type="password" name="password"> <br>
           <button type="submit">Submit</button>
        </form> -->
        <?php echo $_POST["password"]; ?>

        <h2>Arrays</h2>
        <?php
          $friends  = array("Kevin", "Karen", "Oscar", "Jim");
          echo $friends[1];
          $friends[1] = "Dwight";
          echo $friends[1];
          $friends[4] = "Angela";
          echo $friends[4];
          $friends[10] = "Pedro";
          echo $friends[10];
          echo $friends[9];
          echo count($friends);
         ?>

         <h2>Using Checkboxes</h2>
         <form action="index.php" method="post">
           <input type="checkbox" name="fruits[]" value="">
           <input type="submit">
         </form>
         <?php  ?>

  </body>
</html>
