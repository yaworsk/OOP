<?php

require_once("User.php");
require_once("English.php");
require_once("French.php");

class Utility {
	function greet ($user) {
		$var = new $user;
		$var->greeting();
	}
}

?>
