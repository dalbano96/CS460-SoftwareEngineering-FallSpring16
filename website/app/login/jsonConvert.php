<!--
	File: jsonConvert.php
	Converts MySQL database to JSON format
-->

<?php
	// Connect to MySQL db
	require_once 'connect.php';
	
	// Prepare query to extract from users table
	$query = "SELECT * FROM USERS";
	$result = mysqli_query($link, $query) or die("Error, database not found: " .mysqli_error($link));

	// Create array
	$emptyArray = array();
	while($row = mysqli_fetch_assoc($result)) {
		emptyArray[] = $row;
	}

	// Convert array to JSON
	echo json_encode($emptyArray);

	// Close db connection
	mysqli_close($link);
?>
