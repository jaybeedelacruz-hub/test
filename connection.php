<?php
// MySQL database connection settings
$host = 'localhost';  // Usually 'localhost'
$username = 'root';   // MySQL username
$password = '';       // MySQL password (if any)
$database = 'kineme';  // Your database name

// Create connection using mysqli
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
