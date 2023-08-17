<?php
$hostname = 'localhost';
$database = 'mdnew';
$username = 'root';
$password = '';

// new mysqli connection
$con = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($con->connect_error) {
    die("Database connection failed: " . $con->connect_error);
}

// Set character set to utf8
$con->set_charset("utf8");
?>
