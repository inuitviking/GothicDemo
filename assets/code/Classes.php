<?php

class User{
	private $username;
	private $salt;
	private $rawPassword;

	function __construct($username, $password){
		$this->username = $username;
		$this->rawPassword = $password;
	}


	//LOGIN METHOD

	function login(){

		//Get connection to DB
		global $con;

		//Secure from SQL injection
		$safePass = $con->real_escape_string($this->rawPassword);
		$safeUser = $con->real_escape_string($this->username);

		//Empty variable
		$hashPass = '';

		//Check if user exists
		$checkUser = $con->query("SELECT username FROM `users` WHERE username = '$safeUser' LIMIT 1");

		//variable containing the object with the password from DB
		$dbPass = $con->query("SELECT password FROM `users` WHERE username = '$safeUser' LIMIT 1");

		//while loop to extract the password from $dbPass
		while($pw = $dbPass->fetch_object()){

			$hashPass = $pw->password;

		}

		//If the username is wrong
		if($checkUser->num_rows != 1){

			echo "<span id='error'>User doesn't exists</span>";

		//Check password if username is correct
		}elseif(password_verify($safePass, $hashPass)){

				echo "Logged in!";

		}else{

			echo "<span id='error'>Wrong password</span>";

		}

	}//end of login


	//REGISTER METHOD

	function register(){



	}//end of register

}//end of class
