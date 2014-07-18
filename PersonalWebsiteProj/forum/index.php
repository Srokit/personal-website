<?php require_once("noaccess/signup.php");
	if(!empty($_POST))
		checkForm($_POST);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Sign In to Stan's Blog</title>
	</head>
	<body>
		<div id="signUpArea">
			<div>
				<form method="post" action="index.php">
					Email: <input type="email" name="email"> <?php if(isset($formErrors["email"])) echo $formErrors["email"]; ?>
					Username: <input type="text" name="username"><?php if(isset($formErrors["username"])) echo $formErrors["username"]; ?>
					Password: <input type="password" name="password"><?php if(isset($formErrors["password"])) echo $formErrors["password"]; ?>
					Confirm Password: <input type="password" name="passwordConfirm"><?php if(isset($formErrors["passwordConfirm"])) echo $formErrors["passwordConfirm"]; ?>
					Name: <input type="text" name="name"><?php if(isset($formErrors["name"])) echo $formErrors["name"]; ?>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>