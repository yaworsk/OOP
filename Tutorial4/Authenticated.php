<?php

class Authenticated Extends User{
	private $articles_read = 0;

	/**
	 * Setter for articles read.
	 */
	public function setArticlesRead() {
		$this->articles_read++;
	}

	/**
	 * Getter for articles created.
	 */
	public function getArticlesRead() {
		return $this->articles_read;
	}
}
