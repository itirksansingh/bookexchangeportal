<?php
$servername = "localhost";
$username = "root"; // Change if needed
$password = ""; // Change if you have a database password
$database = "book_exchange"; // Your database name

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
