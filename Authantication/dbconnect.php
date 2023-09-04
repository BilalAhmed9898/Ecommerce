<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'registration';

// Create a database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$conn) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}
?>
