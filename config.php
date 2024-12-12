<?php
$servername = "localhost"; // Your database server (usually localhost)
$username = "root"; // Your database username (default for XAMPP is "root")
$password = ""; // Your database password (default for XAMPP is "")
$dbname = "ecommerce"; // Replace with your actual database name

// Establish a database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
