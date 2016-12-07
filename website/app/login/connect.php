<!-- 
	File: connect.php
	Contains connection credentials for database
-->
<?php
$host = "localhost";  // ip or domain name default
$username = "root";  // mysql username default
$password = "raspberry";  // password default for mysql
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

// CSRF protection 
// https://www.owasp.org/index.php/Cross-Site_Request_Forgery_(CSRF)

// 
// php.net/manual/en/function.session-start.php
session_start();

$token = null;

if (!isset($_SESSION['token'])) {
    // Generate a random token 
    // php.net/manual/en/function.rand.php
    // php.net/manual/en/function.sha1.php
    // php.net/manual/en/function.uniqid.php

    $token = sha1(uniqid(RAND(), TRUE));
    $_SESSION['token'] = $token;
} else {
    $token = $_SESSION['token'];
}
