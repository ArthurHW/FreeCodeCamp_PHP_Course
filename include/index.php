<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Including HTML</title>
  </head>
  <body>
    <?php
      include "header.html";
     ?>
     <main>
       This is the main content of the website
       <article>
         <?php
         $title = "My First Post";
         $author = "Arthur";
         $wordCount = 400;
          include "article-header.php";
         ?>
       </article>
     </main>
     <?php
      include "footer.html"
      ?>
  </body>
</html>
