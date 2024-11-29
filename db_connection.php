<?php
// db_connection.php

// Database connection parameters
$hostname = "localhost";  // Usually 'localhost' if the database is on the same server
$username = "root";       // Your database username (default is 'root' for local development)
$password = "";           // Your database password (leave empty if no password set)
$database = "library_db"; // The name of your database

// Establish the connection to the MySQL database
$db = mysqli_connect($hostname, $username, $password, $database);

// Check if the connection was successful
if (!$db) {
    // If the connection failed, display an error and stop further execution
    die("Connection failed: " . mysqli_connect_error());
}
?>
