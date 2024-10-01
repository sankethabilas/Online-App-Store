<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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

// Check if 'id' is set in the URL and ensure it's an integer
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Check if the app exists
    $check_sql = "SELECT * FROM apps WHERE id = ?";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("i", $id);
    $check_stmt->execute();
    $result = $check_stmt->get_result();

    if ($result->num_rows === 0) {
        echo "No record found with the given ID.";
        exit();
    }
    $check_stmt->close();

    // Prepare the DELETE statement to prevent SQL injection
    $stmt = $conn->prepare("DELETE FROM apps WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the query
    if ($stmt->execute()) {
        // Success message before redirect
        echo "App deleted successfully.";
        
        // Redirect to the app list after deletion
        header("Location: add_app.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    // If id is not set or invalid, redirect to app list
    header("Location: add_app.php");
    exit();
}

$conn->close();
?>
