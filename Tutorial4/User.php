<?php

Abstract class User {
	protected $username = '';
	protected $password = '';

	/**
	 * Constructor.
	 *
	 * @param $username
	 * 	String user's username.
	 *
	 * @param $password
	 * 	String user's password.
	 *
	 * @throws InvalidUser
	 *  	Thrown when creating if a user name or password is empty.
	 */
	public function User($username, $password) {
		if (empty($username) || empty($password)) {
			throw new Exception("You must provide a username and password");
	}
		$this->username = $username;
		$this->password = $password;
	}

	/********SETTERS********/
	/**
	 * Set the username.
	 *
	 * @param $username
	 * 	String username.
	 */
	public function setUserName($username = '') {
		$this->username = $username;
	}
	/**
	 * Set a user's password. Note: The password length must be more than
	 * 6 characters.
	 *
	 * @param $password
	 * 	String password.
	 *
	 * @throws Exception
	 * 	Exceptions thrown if a password is less than 6 characters.
	 */
	public function setPassword($password = '') {
		if (strlen($password) < 6) {
			throw new Exception('Password is too short');
		} else {
			$this->password = $password;
		}
	}

	/********GETTERS*******/
	/**
	 * Get a username.
	 *
	 * @return
	 * 	String username.
	 */
	public function getUserName() {
		return $this->username; 
	}
	/**
	 * Get a users password.
	 *
	 * @return
	 * 	String password.
	 */
	public function getPassword() {
		return $this->password;
	}

}
