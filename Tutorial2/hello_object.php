<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
      require("HelloWorld.php");

      $object = new HelloWorld("Hi Pete!");

      $object->sayHello();

      $object->greeting = 'This is a new greeting';

      $object->sayHello();

      unset($object);
    ?>

  </body>
</html>
