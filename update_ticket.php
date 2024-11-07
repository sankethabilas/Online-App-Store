<?php
include "connection.php";

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$problem = $_POST['problem'];

$stmt = $conn->prepare("UPDATE help_desk SET name = ?, mobile = ?, email = ?, problem = ? WHERE id = ?");
$stmt->bind_param("ssssi", $name, $mobile, $email, $problem, $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
?>