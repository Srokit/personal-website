<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php 
				$url = htmlspecialchars($_SERVER["PHP_SELF"]);
				
				if($url == "index.php")
					echo "Main | Stan's Site";
				elseif($url == "contact.php")
					 echo "Contact | Stan's Site";
				elseif($url == "links.php")
					echo "Links | Stan's Site";
				elseif($url == "jsdemo.php")
					echo "Javascript Demo | Stan's Site";
			?>
		</title>
		<meta name="author" content="Stanley Rokita">
		<meta name="keywords" content="personal, site, IIT, coder, camp">
		<meta name="description" content="a personal site made by Stan Rokita that is meant to show off some of his web development skills">
		<link type="text/css" rel="stylesheet" href="style.css">
		<script src="jsscript.js"></script>
	</head>