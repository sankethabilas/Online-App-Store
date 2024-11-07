<?php
include "connection.php";

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM help_desk WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => $conn->error]);
}
?>