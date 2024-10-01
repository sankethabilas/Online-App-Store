<?php


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appstore";
$conn = new mysqli($servername, $username, $password, $dbname,"3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>