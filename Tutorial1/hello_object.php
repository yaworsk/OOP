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

      $object = new HelloWorld();

      $object->sayHello();

      unset($object);
    ?>

  </body>
</html>
