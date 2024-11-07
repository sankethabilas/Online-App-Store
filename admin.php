<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Online Appstore</title>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>

<body>

    <?php

    include "connection.php";



    $sql1 = "SELECT * FROM user";
    $user_rs = $conn->query($sql1);

    ?>

    <h1>Admin Dashboard - Online Appstore</h1>
<br>
    <h2>User Table</h2>
    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>email</th>
            <th>Password</th>
            <th>Mobile</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>

        <?php
        while ($user_details = $user_rs->fetch_assoc()) {

        ?>
            <tr>
            <tr data-id="<?php echo $user_details["email"]; ?>">
                <td><?php echo $user_details["fname"]; ?></td>
                <td><?php echo $user_details["lname"]; ?></td>
                <td><?php echo $user_details["email"]; ?></td>
                <td><?php echo $user_details["password"]; ?></td>
                <td><?php echo $user_details["mobile"]; ?></td>
                <td><?php echo $user_details["gender"]; ?></td>
                <td>
                <button class="btn btn-edit" onclick="editUser('<?php echo $user_details['email']; ?>')">Edit</button>
                <button class="btn btn-delete" onclick="deleteUser('<?php echo $user_details['email']; ?>')">Delete</button>
                </td>
            </tr>
        <?php
        }



        ?>




    </table>


    <?php
    
    $sql2 = "SELECT * FROM help_desk";
    $ticket_rs = $conn->query($sql2);
    
    ?>
    <h2>Ticket Table</h2>
    <table>
        <tr>
            
            <th>ID</th>
            <th>Type</th>
            <th>Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Problem</th>
            <th>Action</th>
        </tr>
        <tr>
            <?php
            while ($ticket_details = $ticket_rs->fetch_assoc()) {
                ?>
                <tr data-id="<?php echo $ticket_details["id"]; ?>">
                <td><?php echo $ticket_details["id"]; ?></td>
                <td><?php echo $ticket_details["type"]; ?></td>
                <td><?php echo $ticket_details["name"]; ?></td>
                <td><?php echo $ticket_details["mobile"]; ?></td>
                <td><?php echo $ticket_details["email"]; ?></td>
                <td><?php echo $ticket_details["problem"]; ?></td>
                <td>
                <button class="btn btn-respond" onclick="respondToTicket(<?php echo $ticket_details['id']; ?>)">Respond</button>
                </td>
        </tr>
    <?php
            }
            
         ?>   
       
    </table>

   

    <script src="adminscript.js"></script>


</body>

</html>

