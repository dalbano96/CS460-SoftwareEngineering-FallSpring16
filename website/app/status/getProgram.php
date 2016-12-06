<?php
	// Connect to db
	require '../login/connect.php';
	session_start();
	// Prep query
	$query = "SELECT program_name 
						FROM grad_program 
						WHERE program_id=6;";
	$stmt = mysqli_stmt_init($link);
	$results = mysql_query($query) or die(mysql_error());
	echo mysql_result($result, 2);
	mysql_close($link);
?>
