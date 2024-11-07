<?php
include "connection.php";

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM help_desk WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$ticket = $result->fetch_assoc();

echo json_encode($ticket);
?>