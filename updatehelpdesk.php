<?php
session_start();
include 'connection.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    
    $problem = $_POST['problem'];

    $sql = "UPDATE users SET name=?, mobile=?, email=?, problem=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $mobile, $email, $problem, $id);

    if ($stmt->execute()) {
        $_SESSION['message'] = "User updated successfully!";
    } else {
        $_SESSION['message'] = "Error updating user: " . $conn->error;
    }

    $stmt->close();
    $conn->close();

    header("Location: FAQ.php"); 
    exit();
}
?>