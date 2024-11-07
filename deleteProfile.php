<?php
session_start();
include "connection.php";

if (isset($_SESSION["u"])) {
    $email = $_SESSION["u"]["email"];

   
    $conn->begin_transaction();

    try {
        
        $sql1 = "DELETE FROM user_other_details WHERE s_email = ?";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("s", $email);
        $stmt1->execute();

       
        $sql2 = "DELETE FROM user WHERE email = ?";
        $stmt2 = $conn->prepare($sql2);
        $stmt2->bind_param("s", $email);
        $stmt2->execute();

        
        $conn->commit();

        
        session_destroy();

        echo "success";
    } catch (Exception $e) {
        
        $conn->rollback();
        echo "error";
    }

    $conn->close();
} else {
    echo "unauthorized";
}
?>