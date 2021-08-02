<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course 2</title>
  </head>
  <body>
    <h1>PHP Course 2</h1>
    <h2>Return Statements</h2>
    <?php
      function cube($num){
        return $num * $num * $num;
      }
      $cubeResult = cube(4);
      echo $cubeResult;
     ?>
     <h2>If Statements</h2>
     <?php
        $isMale = false;
        $isTall = false;
        if ($isMale && $isTall){
          echo "You are a tall male";
        } elseif($isMale && !$isTall){
          echo "You are a short male";
        } elseif(!$isMale && $isTall){
          echo "You are not male but you are tall";
        }  else {
          echo "You are not male and not tall";
        }
        echo "<br>";
        echo max(3, 6); // returns the bigger number
        function getMax($num1, $num2, $num3){
          if ($num1 >= $num2 && $num1 >= $num3){
            return $num1;
          } elseif ($num2 >= $num1 && $num2 >= $num3){
            return $num2;
          }
          else{
            return $num3;
          }
        }
        echo getMax(3,6, 4);
        echo getMax(3,3, 9);
     ?>
     <h2>Building a better calculator</h2>

     <!-- <form action="second.php" method="post">
       First num: <input type="number" name="num1"> <br>
       Operator: <input type="text" name="operator"> <br>
       Second num: <input type="number" name="num2"> <br>
       <input type="submit">
     </form> -->
     <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $operator = $_POST["operator"];
      if($operator == "+"){
        echo $num1 + $num2;
      } elseif($operator == "-"){
        echo $num1 - $num2;
      } elseif ($operator == "*"){
        echo $num1 * $num2;
      } elseif ($operator == "/"){
        echo $num1 / $num2;
      } else {
        echo "Invalid Operator";
      }
      ?>
      <h2>Switch Statements</h2>
      <form action="second.php" method="post">
        What was your grade: <input type="text" name="grade">
        <input type="submit">
      </form>
      <?php
        $grade = $_POST["grade"];
        switch ($grade) {
          case 'A':
            echo "You did amazing!";
            break;
          case 'B':
            echo "You did pretty god";
            break;
          case 'C':
            echo "You did well, but you can do better, i believe you!";
            break;
          case 'D':
            echo "You did not achieve a great grade, but you can try better next time";
            break;
          case 'F':
            echo "You failed the test, but don't worry, you can learn even more through your fails!";
            break;
          default:
            echo "You entered an invalid grade";
            break;
        }
       ?>
       <h2>While Loops</h2>
       <?php
        // $index = 6;
        // while($index <= 5){
        //   echo "$index <br>";
        //   $index++;
        // }
        // do {
        //   echo "$index <br>";
        //   $index++;
        // } while ($index <= 5);
        ?>
        <h2>For Loops</h2>
        <?php
          // for($i = 1; $i <= 5; $i++){
          //   echo "$i <br>";
          // }
          $luckyNumbers = array(4,8,14,16,23,42);
          for ($i = 0; $i < count($luckyNumbers); $i++){
            echo "$luckyNumbers[$i] <br>";
          }
         ?>
         <h2>Comments</h2>
         <?php
          // That's a comment
          /*
            This is a multi
                           line comment
          */
          ?>
  </body>
</html>
