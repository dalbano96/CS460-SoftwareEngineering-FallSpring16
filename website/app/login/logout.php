<?php
	session_start();
	unset($_SESSION['valid']);
	
	echo "You have successfully logged out";
	header('Refresh: 2; URL = login.php');
?>
