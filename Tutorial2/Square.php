<?php

class Square{

	private $length = 0;
	private $width = 0;

	/**
	 * Constructor
	 *
	 * @param $length
	 *  Integer length for the object.
	 *
	 * @param $width
	 *  Integer width for the object.
	 */
	function Square($length, $width) {
		$this->length = $length;
		$this->width = $width;
	}

	/**
	 * Calculate the area for the object.
	 *
	 * @return
	 *  Integer area for the object, multiplying the width by the height.
	 */
	function calcArea() {
		return $this->length * $this->width;
	}

	/**
	 * Setter for length
	 *
	 * @param $length
	 *  Integer value representative of the length.
	 *
	 * @throws Exception
	 *  Will throw an exception if the length passed in not an integer.
	 */
	function setLength($length) {
		if (!is_numeric($length)) {
			throw new Exception("You must pass a integer.");
		}
		$this->length = (int)$length;
	}

	/**
	 * Getter for length.
	 *
	 * @return
	 *  Integer value of the length
	 */
	function getLength() {
		return $this->length;
	}

	/**
	 * Setter for width
	 *
	 * @param $width
	 *  Integer value representative of the width.
	 */
	function setWidth($width) {
		if (!is_numeric($width)) {
			throw new Exception("You must pass a integer.");
		}
		$this->width = (int)$width;
	}

	/**
	 * Getter for width.
	 *
	 * @return
	 *  Integer value of the width
	 */
	function getWidth() {
		return $this->width;
	}

}
