<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Tutorial 4: Users</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <?php
      require("User.php");
      require("Admin.php");
      require("Authenticated.php");
      $debug = TRUE;

	#$user = new User('Peter', '1234567');
	#echo "{$user->getUserName()} - username.<br />";
	#echo "{$user->getPassword()} - password.<br />";

     try {
     	$admin = new Admin('Admin', '1234567', 7);
     } catch (Exception $e) {
		if ($debug) {
		      print $e->getMessage();
		      die();
		} else {
		      print 'Opps, something went wrong.';
		      die();
		}
     }
     echo "{$admin->getArticlesCreated()} articles created.<br />";
     echo "{$admin->getUserName()} - username.<br />";
     echo "{$admin->getPassword()} - password.<br />";

     $auth = new Authenticated('Authenticated', '12345678');
     echo "{$auth->getArticlesRead()} articles read.<br />";
     $auth->setArticlesRead();
     echo "{$auth->getArticlesRead()} articles read.<br />";
     $auth->setArticlesRead();
     echo "{$auth->getArticlesRead()} articles read.<br />";
     $auth->setArticlesRead();
     echo "{$auth->getArticlesRead()} articles read.<br />";
     echo "{$auth->getUserName()} - username.<br />";
     echo "{$auth->getPassword()} - password.<br />";

      unset($user);
      unset($admin);
      unset($auth);
    ?>

  </body>
</html>
