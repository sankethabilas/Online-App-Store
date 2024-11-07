<?php
include "connection.php";

$email = $_GET['email'];

$stmt = $conn->prepare("DELETE FROM user WHERE email = ?");
$stmt->bind_param("s", $email);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
?>