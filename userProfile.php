
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>User Profile | App store</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/app-store logo.png" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <?php include "header2.php"; ?>

            <?php

            include "connection.php";

            if (isset($_SESSION["u"])) {

                $email = $_SESSION["u"]["email"];
                

                $sql1 = "SELECT * FROM user WHERE email = '" . $email . "'";
                $user_rs = $conn->query($sql1);

                $sql2 = "SELECT * FROM user_other_details WHERE s_email = '" . $email . "'";
                $user_other_rs = $conn->query($sql2);

                $user_details = $user_rs->fetch_assoc();
                $user_other_details = $user_other_rs->fetch_assoc();

            ?>

                <div class="col-12 ">
                    <div class="row">

                        <div class="col-12 bg-body rounded mt-4 mb-4">
                            <div class="row g-2">

                                <div class="col-md-3 ">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5">


                                        <?php
                                        if (empty($user_other_details["image_path"])) {

                                        ?>
                                            <img src="resource/profile-avatar.png" class="rounded mt-5" style="width: 150px;" id="img"/>

                                        <?php
                                        } else {

                                        ?>
                                            <img src="<?php echo $user_other_detials["image_path"] ?>" id="img" class="rounded mt-5" style="width: 150px;" />

                                        <?php

                                        }

                                        ?>


                                        <span class="fw-bold"><?php echo $user_details["fname"] . " " . $user_details["lname"] ?></span>
                                        <span class="fw-bold text-black-50"><?php echo $user_details["email"] ?></span>

                                        <input type="file" class="d-none" id="profileimage" />
                                        <label for="profileimage" class="btn btn-primary mt-5" onclick="changeProfileImage();">Update Profile Image</label>

                                    </div>
                                </div>

                                <div class="col-md-5 ">
                                    <div class="p-3 py-5" style="border:2px solid black; border-radius: 10px" ;>

                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="fw-bold">Profile Settings</h4>
                                        </div>

                                        <div class="row mt-4">

                                            <div class="col-6">
                                                <label class="form-label">First Name</label>
                                                <input id="fname" type="text" class="form-control" readonly value="<?php echo $user_details["fname"] ?>" />
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Last Name</label>
                                                <input id="lname" type="text" class="form-control" readonly value="<?php echo $user_details["lname"] ?>" />
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Mobile</label>
                                                <input id="mobile" type="text" class="form-control" readonly value="<?php echo $user_details["mobile"] ?>" />
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label"></label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" value="abcdef" readonly />
                                                    <span class="input-group-text bg-primary" id="basic-addon2">
                                                        <i class="bi bi-eye-slash-fill text-white"></i>
                                                    </span>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Email</label>
                                                <input  type="text" class="form-control" readonly value="<?php echo $user_details["email"] ?>" />
                                            </div>



                                            <div class="col-12">
                                                <label class="form-label">Address Line 01</label>

                                                <?php
                                                if (empty($user_other_details["address_01"])) {
                                                ?>
                                                    <input id="line1" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="line1" type="text" class="form-control"  value="<?php echo $user_other_details["address_01"]?>"/>
                                                <?php
                                                }

                                                ?>

                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Address Line 02</label>
                                                <?php
                                                if (empty($user_other_details["address_02"])) {
                                                ?>
                                                    <input id="line2" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="line2" type="text" class="form-control"  value="<?php echo $user_other_details["address_02"]?>"/>
                                                <?php
                                                }

                                                ?>

                                                
                                            </div>


                                            <?php
                                            

                                            
                                            ?>
                                            <div class="col-6">
                                                <label class="form-label">Province</label>
                                                <?php
                                                if (empty($user_other_details["province"])) {
                                                ?>
                                                    <input id="province" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="province" type="text" class="form-control"  value="<?php echo $user_other_details["province"]?>"/>
                                                <?php
                                                }

                                                ?>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">District</label>
                                                <?php
                                                if (empty($user_other_details["district"])) {
                                                ?>
                                                    <input id="district" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="district" type="text" class="form-control"  value="<?php echo $user_other_details["district"]?>"/>
                                                <?php
                                                }

                                                ?>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">City</label>
                                                <?php
                                                if (empty($user_other_details["city"])) {
                                                ?>
                                                    <input id="city" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="city" type="text" class="form-control"  value="<?php echo $user_other_details["city"]?>"/>
                                                <?php
                                                }

                                                ?>
                                            </div>

                                            <div class="col-6">
                                                <label class="form-label">Postal Code</label>
                                                <?php
                                                if (empty($user_other_details["postal_code"])) {
                                                ?>
                                                    <input id="pcode" type="text" class="form-control" />
                                                <?php

                                                } else {
                                                ?>
                                                    <input id="pcode" type="text" class="form-control"  value="<?php echo $user_other_details["postal_code"]?>"/>
                                                <?php
                                                }

                                                ?>
                                            </div>

                                            <div class="col-12">
                                                <label class="form-label">Gender</label>
                                                <input type="text" class="form-control" value="<?php echo $user_details["gender"] ?>" readonly />
                                            </div>

                                            <div class="col-12 d-grid mt-2">
                                                <button class="btn btn-primary" onclick="updateProfile();">Update My Profile</button>
                                            </div>

                                            <div class="col-12 d-grid mt-2">
                                                <button class="btn btn-danger" onclick="deleteProfile();">Delete My Profile</button>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>
                </div>


            <?php

            } else {
                header("location:signup.php");
            }
            ?>



            <?php include "footer.php"; ?>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>