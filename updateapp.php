<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $app_id = $_GET['id'];
    $app_name = $_POST['app_name'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];
    $description = $_POST['description'];

    $sql = "UPDATE apps SET app_name = ?, category = ?, image_url = ?, description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $app_name, $category, $image_url, $description, $app_id);

    if ($stmt->execute()) {
        header("Location: editfreeapp.php");
        exit();
    } else {
        echo '<p>Error: ' . $stmt->error . '</p>';
    }

    $stmt->close();
}

$conn->close();
?>
