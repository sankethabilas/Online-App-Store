<?php

session_start();

include "connection.php";

$email = $_POST["e"];
$password = $_POST["p"];


$sql = "SELECT * FROM user WHERE email ='".$email."' AND password = '".$password."'";
$result = $conn->query($sql);
$n = $result->num_rows;

if($n==1){
    echo("success");
    $d = $result->fetch_assoc();
    $_SESSION["u"] = $d;

     

}

$sql2="SELECT * FROM admin WHERE email ='".$email."' AND password = '".$password."'";
$result2 = $conn->query($sql2);
$n2 = $result2->num_rows;

if($n2==1){
    echo("adminsuccess");
    
    
}

$conn->close();
?>