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

   $sql="INSERT INTO payment(bank,cardnumber,name,address,zipcode,expiredate,cvv) VALUES ('$userBank','$userNmuber','$userName','$userAddress','$userCode','$userExDate','$userCvv')";
   
   if($con->query($sql))
   {
      echo "Insert Successful";
   }
   else
   {
    echo "Error".$con->error;
   }

   $con->close();
?>