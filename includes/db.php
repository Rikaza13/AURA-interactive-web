<?php
$host = "localhost";
$username = "root";  // Default MySQL username
$password = "";      // Empty password
$database = "aura_skincare";  // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

