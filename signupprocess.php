<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$gender = $_POST["g"];

$sql = "SELECT * FROM user WHERE email='".$email."' OR password = '".$password."' OR mobile = '".$mobile."'";
$result = $conn->query($sql);
$n = $result->num_rows;

if($n>0){
    echo("User with the same email address or same mobile number already exist");
} else {

    $sql2 = "INSERT INTO user (fname,lname,email,password,mobile,gender)
    VALUES ('$fname','$lname','$email','$password','$mobile','$gender')";
    $conn->query($sql2);
    echo("success");
}

$conn->close();


?>