<?php

class HelloWorld {

	public $greeting = "Hello World";

	function __construct($salutation = "") {
		if(!empty($salutation)) {
			$this->greeting = $salutation;
		}	
	}

	function sayHello() {
		print $this->greeting;
	}	

}
