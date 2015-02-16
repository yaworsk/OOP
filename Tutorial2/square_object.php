<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Square</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
      require("Square.php");

      $object = new Square(5, 5);
 
      print "{$object->calcArea()}\n\n";

      try {
	      $object->setlength(10);
      } catch (Exception $e) {
	      print "Opps, something wetn wrong.";
      }

      print "{$object->calcArea()}\n\n";

      unset($object);
    ?>

  </body>
</html>
