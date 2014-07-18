<?php
	$con = mysqli_connect("mysql2.000webhost.com","a4494917_stan","Booyah24","a4494917_standb");
	$query = "SELECT * FROM users";
	
	$result = mysqli_query($con, $query);
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		$output[] = $row;
	
	echo json_encode($output);
	
	mysqli_free_result($result);
	mysqli_close($con);
?> 