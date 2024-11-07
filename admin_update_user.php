<?php
include "connection.php";

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];

$stmt = $conn->prepare("UPDATE user SET fname = ?, lname = ?, mobile = ?, gender = ? WHERE email = ?");
$stmt->bind_param("sssss", $fname, $lname, $mobile, $gender, $email);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
?>