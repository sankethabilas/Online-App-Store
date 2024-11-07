<?php

$servername = "localhost";
$username = "root";  
$password = "";      
$dbname = "appstore"; 
$con = new mysqli($servername, $username, $password, $dbname,"3307");

if ($con->connect_error) 
{
    die("Connection failed". $con->connect_error);
}

$userBank = $_POST["bank_select"];
$userNmuber = $_POST["card_number"];
$userName = $_POST["nameon_card"];
$userAddress = $_POST["address"];
$userCode = $_POST["zip_code"];
$userExDate = $_POST["expiration_date"];
$userCvv = $_POST["cvv"];

$sql="UPDATE payment set bank='$userBank',cardnumber='$userNmuber',name='$userName',
                    address='$userAddress',zipcode='$userCode',expiredate='$userExDate',cvv='$userCvv' WHERE cvv='$userCvv'";


if($con->query($sql))
{
    echo "Updated";
}



?>