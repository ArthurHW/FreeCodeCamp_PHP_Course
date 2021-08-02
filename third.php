<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PHP Course 3</title>
  </head>
  <body>
    <h1>PHP Course 3</h1>
    <h2>Classes & Objects</h2>
    <?php
      // class Book{
      //   var $title;
      //   var $author;
      //   var $pages;
      // }
      // $book1 = new Book();
      // $book1->title = "Harry Potter";
      // $book1->author = "JK Rowling";;
      // $book1->pages = 400;
      //
      // echo $book1->title;
      // echo "<br>";
      // echo $book1->author;
      // echo "<br>";
      // echo $book1->pages;
      // echo "<br>";
      //
      // $book2 = new Book();
      // $book2->title = "Lord Of the Rings";
      // $book2->author = "Tolkien";;
      // $book2->pages = 700;
      //
      // echo $book2->title;
      // echo "<br>";
      // echo $book2->author;
      // echo "<br>";
      // echo $book2->pages;
      // echo "<br>";
    ?>

    <h2>Constructors</h2>

    <?php
      class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title= $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }
      $book1 = new Book("Harry Potter", "JK Rowling", 400);
      $book2 = new Book("Lord Of the rings", "Tolkien", 700);
      echo $book1->title;
      echo "<br>";
      echo $book1->author;
      echo "<br>";
      echo $book1->pages;
      echo "<br>";

      echo $book2->title;
      echo "<br>";
      echo $book2->author;
      echo "<br>";
      echo $book2->pages;
      echo "<br>";
     ?>
     <h2>Object Functions</h2>
     <?php
        class Student {
          var $name;
          var $major;
          var $gpa;
          function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
          }
          function hasHonors(){
            return $this->gpa >= 3.5;
          }
        }
        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);
        if ($student2->hasHonors()){
          echo "$student2->name has Honors";
        }
      ?>

  </body>
</html>
