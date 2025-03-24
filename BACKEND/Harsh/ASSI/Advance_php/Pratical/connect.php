<?php 
	//Connection

// Database credentials

// Create connection
$conn = new mysqli('localhost', 'root', '','example');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";

?>