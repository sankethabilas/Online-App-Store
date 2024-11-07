<?php

include "connection.php";

$type = $_POST["type"];
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$problem = $_POST["problem"];

$sql1 = "INSERT INTO help_desk (type,name,mobile,email,problem)  VALUES 
('$type','$name','$mobile','$email','$problem')";


if($conn->query($sql1)){
    header("Location: helpdesk.php?status=success");
    echo("success");
    exit();
}else {
    header("Location: helpdesk.php?status=error");
    exit();
}
?>