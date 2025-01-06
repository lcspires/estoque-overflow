<?php

class Signup extends Dbh

{
	private $username;
	private $pwd;
	
	public function __construct($username, $pwd)
	{
			$this->username = $username;
			$this->pwd = $pwd;
	}
	
	private function insertUser()
	{
			$query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd);";
			$smtp = parent::connect()->prepare($query);
			$smtp->bindParam(":username", $this->username);
			$smtp->bindParam(":pwd", $this->pwd);
			$smtp->execute();
	}
	
	private function isEmptySubmit()
	{
			if (isset($this->username) && isset($this->pwd)){
				return false;
			} else {
				return true;
			}
	}
	
	public function signupUser()
	{
			// Error bandlers
			if ($this->isEmptySubmit()){
				header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
				die();
			}
			
			// If no Error, signup user
			$this->insertUser();
	}
}

