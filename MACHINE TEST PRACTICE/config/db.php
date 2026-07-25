<?php
$host = 'localhost';
$dbname = 'restaurant_db';
$username = 'root';
$password = ''; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "Database connection failed: " . $conn->connect_error;
}

?>