<?php

class HelloWorld {

	public $greeting = "Hello World";

	function HelloWorld($salutation = "") {
		if(!empty($salutation)) {
			$this->greeting = $salutation;
		}
	}

	function sayHello() {
		print $this->greeting;
	}
}
