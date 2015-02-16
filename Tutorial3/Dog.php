<?php

class Dog extends Pet {

	private $has_tail = FALSE;
	
	function Dog($has_tail, $name) {
		parent::Pet($name);
		$this->has_tail = $has_tail;
		print "Dog constructor called <br />";
	}

	function fetch() {
		print "{$this->name} is fetching.";
	}

	function hasTail() {
		return $this->has_tail;
	}

}
