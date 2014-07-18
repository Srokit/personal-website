<?php
	session_start();
	
	function connectToDB(){
		$connection = mysqli_connect("mysql2.000webhost.com","a4494917_stan","Booyah24","a4494917_standb"); #will return true or false based on connection
		
		return $connection;
	}
  
	function handleForm(){
		foreach($_POST as $formVal)
			$formVal = htmlspecialchars($formVal); #for security
		
		$errors = array( #list of errors
		"DBConnectError" => "Error: Could not open connection to Database.",
		"DBInsertError" => "Error: Could not insert data into server.",
		"DBCloseError" => "Error: Could not close Database connection.",
		"formSpacesError" => "Error: Form cannot contain spaces or tabs",
		"formNullError" => "Error: Form msust be filled before submitting."
		);
		$messages = array( #list of messages
			"newUserMessage" => "Welcome to the site " . $_POST["name"] . "!<br>Your username is: " . $_POST["username"] . "<br>Your password is: " . $_POST["password"],
			"existingUserMessage" => "Welcome back " . $_POST["name"] . "!"
		);
		
		if(!checkForm($_POST)){
				
			$connection = connectToDB();
			if(!$connection)
				$_SESSION["error"] = $errors["DBConnectError"];
			
			else{ #if connection is established to DB
				if (!checkDuplicateUsername($_POST["username"], $connection)){ #if this is a unique username
				
					if(!insertUserData($_POST, $connection))
						$_SESSION["error"] = $errors["BDInsertError"];
			
					if($connection)
						if(!closeDB($connection))
							$_SESSION["error"] = $errors["DBCloseError"];
			
					if($_SESSION["error"] != $errors["DBInsertError"]) #if the data was inserted properly
						$_SESSION["message"] = $messages["newUserMessage"];
				}
				else
					$_SESSION["message"] = $messages["existingUserMessage"];
			}
		}
		elseif(checkForm($_POST) == "null") #if the form has white space
			$_SESSION["error"] = $errors["formNullError"];
		else
			$_SESSION["error"] = $errors["formSpacesError"];
	}
	
	function checkForm($form){
		$error = false; #default no error
		
		foreach($form as $formVal)
			if($formVal == ""){
				$error = "null";
				break;
			}
		
		if(!$error)
			foreach($form as $formVal)	
				if(preg_match('/\s/', $formVal)){ #check for white space
					$error = "space";
					break;
				}	
			
		return $error;
	}
	
	function checkDuplicateUsername($username, $connection){
		$isDupliacte = false; #default return value	
		
		$username = mysqli_real_escape_string($connection, $username);
		$query = "SELECT username FROM users WHERE username = '" . $username . "';";

		$result = mysqli_query($connection, $query);	#if there was something returned
		$row = mysqli_fetch_array($result);
		
		if(!empty($row))
			$isDupliacte = true;
	
		mysqli_free_result($result);
		return $isDupliacte;
	}
	
	function insertUserData($form, $connection){
		$didWork = false; #default value
				
		$query = "INSERT INTO users ("; #appending all values onto query
				
		$formKeys = array_keys($form);
		for($index = 0; $index < count($formKeys) - 1; $index++) #all items in form except the last one
			$query .= $formKeys[$index] . ", ";
		$query .= $formKeys[count($formKeys) - 1] . ") VALUES ("; #last item
				
		$formVals = array_values($form);
		foreach($formVals as $formVal)
			$formVal = mysqli_real_escape_string($connection, $formVal);
		for($index = 0; $index < count($formVals) - 1; $index++) #all items in form except the last one
			$query .= "'" . $formVals[$index] . "', ";
		$query .= "'" . $formVals[count($formVals) - 1] . "');"; #last item
				
		if(mysqli_real_query($connection, $query)) #check that the query worked
			$didWork = true;
				
		return $didWork;
	}
			
	function closeDB($connection){
		$didWork = false;
		if(mysqli_close($connection))
			$didWork = true;
		return $didWork;
	}
?>