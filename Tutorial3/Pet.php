<?php

class Pet {
	protected $name = '';

	function Pet($name) {
		$this->name = $name;
		print "Pet constructor called.<br />";
	}

	function eat() {
		print "{$this->name} is eating.";
	}

	function sleep() {
		print "{$this->name} is sleeping.";
	}
}
