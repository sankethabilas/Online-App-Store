<?php

session_start();

include "connection.php";

$email = $_SESSION["u"]["email"];

$fname = $_POST["f"];
$lname = $_POST["l"];
$mobile = $_POST["m"];
$line1 = $_POST["l1"];
$line2 = $_POST["l2"];
$province = $_POST["p"];
$district = $_POST["d"];
$city = $_POST["c"];
$pcode = $_POST["pc"];


$sql1 = "SELECT * FROM user WHERE email ='" . $email . "'";
$user_rs = $conn->query($sql1);

if ($user_rs->num_rows == 1) {
    $sql2 = "UPDATE user SET fname ='" . $fname . "',lname='" . $lname . "', mobile = '" . $mobile . "' WHERE
    email = '" . $email . "'";

    $conn->query($sql2);

    $sql3 = "SELECT * FROM user_other_details WHERE s_email = '" . $email . "'";
    $user_other_rs = $conn->query($sql3);

    if($user_other_rs->num_rows==1){
        $sql4 = "UPDATE user_other_details SET address_01='".$line1."',address_02 = '".$line2."',province = '".$province."',
        district = '".$district."',city = '".$city."',postal_code='".$pcode."'";
        
        $conn->query($sql4);
    }else{
        $sql5= "INSERT INTO user_other_details (s_email,address_01,address_02,province,district,city,postal_code) VALUES
        ('$email','$line1','$line2','$province','$district','$city','$pcode')";
        $conn->query($sql5);
    }
    
    if(sizeof($_FILES)==1){

        $image = $_FILES["i"];
        $image_extension = $image["type"];
        $allowed_image_extensions = array("image/jpeg","image/png","image/svg+xml");

        if(in_array($image_extension,$allowed_image_extensions)){
            $new_image_extension;

            if($image_extension=="image/jpeg"){
                $new_image_extension = ".jpeg";
            }else if($image_extension=="image/png"){
                $new_image_extension = ".png";
            } else if($image_extension=="image/svg+xml"){
                $new_image_extension = ".svg";
            }

            $file_name = "profile_images/".$fname."_".uniqid().$new_image_extension;
            move_uploaded_file($image["tmp_name"],$file_name);

            $sql6 = "SELECT * FROM user_other_details WHERE s_email ='".$email."'";
            $profile_img_rs=$conn->query($sql6);

            if($profile_img_rs->num_rows==1){

                $sql7 ="UPDATE user_other_details SET image_path = '".$file_name."' WHERE s_email = '".$email."'";
                $conn->query($sql7);
                echo("updated");

            }else {

                $sql8="INSERT INTO user_other_details (image_path) VALUES ('$file_name')";
                $conn->query($sql8);
                echo("saved");

            }
        }

    }else if(sizeof($_FILES)==0){
        echo ("You have not selected any image");

    }else{
          echo ("You must select only one image");
    }


} else {
    echo "Invalid User";
}
