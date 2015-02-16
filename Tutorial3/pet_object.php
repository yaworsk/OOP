<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pet</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
      require("Pet.php");
      require("Cat.php");
      require("Dog.php");

      $pet = new Pet("Smithers");
      $dog = new Dog(TRUE,"Bailey");
      $cat = new Cat("Susie");

      ##Inherited methods
      $pet->eat();
      print "<br />";
      $dog->eat();
      print "<br />";
      $cat->eat();
      print "<br />";

      $pet->sleep();
      print "<br />";
      $dog->sleep();
      print "<br />";
      $cat->sleep();
      print "<br />";
 
      #Custom methods
      print "<br />";
      $dog->fetch();
      print "<br />";
      $cat->climb();
      print "<br />";

      print $dog->hasTail();

      unset($pet);
      unset($dog);
      unset($cat);
    ?>

  </body>
</html>
