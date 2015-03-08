<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial 5: Interfaces</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
      #require("English.php");
      #require("French.php");
      require("Utility.php");

      $utility = new Utility();
      #$english = new English();
      #$french = new French();
      #$utility->greet($english);
      $utility->greet('English');
      print "<br >";
      #$utility->greet($french);
      $utility->greet('French');

      unset($utility);
      unset($english);
      unset($french);
    ?>

  </body>
</html>
