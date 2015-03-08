<?php

class Admin Extends User{
	private $articles_created = 0;

	/**
	 * Constructor
	 */
	public function Admin($username, $password, $articles_created) {
		parent::User($username, $password);
		$this->articles_created = (int)$articles_created;
	}

	/**
	 * Getter for articles created.
	 */
	public function getArticlesCreated() {
		return $this->articles_created;
	}
}
