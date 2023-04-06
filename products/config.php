<?php

// Setting up database connection variables
$host = "localhost";
$username = "root";
$password = "";
$database = "shop";

// Creating database connection
$conn = new mysqli($host, $username, $password, $database);

// Checking if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Setting character set to UTF-8 to avoid encoding issues
$conn->set_charset("utf8");
?>
