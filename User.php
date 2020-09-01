<?php

	class User
	{

		public $attributes = '';
		public $errors = '';

		//print_r($attributes);

		public function validate()
		{
			if($this->attributes) 
			{
				explode($this->attributes);

				if($name == ''){
					$this->errors = 'name is empty';
					return false;
				}
				elseif($username == ''){
					$this->errors = 'username is empty';
					return false;

				}
				elseif($password == ''){
					$this->errors = 'password is empty';
					return false;

				}
				elseif($confirm_password == ''){
					$this->errors = 'confirm_password is empty';
					return false;

				}
				elseif($zip == ''){
					$this->errors = 'zip is empty';
					return false;

				}
				return true;
			}	
			else{
				return false;
			}


		}


		public function save()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "test";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) 
			{
	  			die("Connection failed: " . $conn->connect_error);
			}

			explode($this->attributes);
// Array ( [name] => Prasanna Mane [username] => prasannamane7@gmail.com [password] => Prasanna@12 [confirm_password] => Prasanna@12 [zip] => 123245 )


			$sql = "INSERT INTO mytest (name, username, password, zip) VALUES ('$name', '$username', '$password', '$zip')";

			if ($conn->query($sql) === TRUE) 
			{
	  			echo "New record created successfully";
			} 
			else 
			{
	  			echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}

		public function getErrorSummary($objUser)
		{
			echo $objUser->errors;

		}

		//public getErrorSummary();	
	}

