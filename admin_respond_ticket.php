<?php
include "connection.php";

$id = $_POST['id'];
$response = $_POST['response'];


$sql1="INSERT INTO ticket_respond (response) VALUES('$response')";

if ($conn->query($sql1)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
?>