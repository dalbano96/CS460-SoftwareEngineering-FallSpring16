<?php


$host = '127.0.0.1';  // ip or domain name default
$username = "root";  // mysql username default
$password = "";  // password default for mysql
$database = "student";  // student database

// http://php.net/manual/en/function.mysqli-connect.php tutorial on how to connect to 
// my sql using php
$link = mysqli_connect($host, $username, $password, $database);
if(!$link) {
	
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

//connected
//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;


