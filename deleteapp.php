<?php
include 'connection.php';

$app_id = $_GET['id'];

$sql = "DELETE FROM apps WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $app_id);

if ($stmt->execute()) {
    header("Location: editfreeapp.php");
    exit();
} else {
    echo '<p>Error: ' . $stmt->error . '</p>';
}


$stmt->close();
$conn->close();
?>
