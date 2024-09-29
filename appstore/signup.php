<?php

include "connection.php";

?>


<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Store</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="signupstyle.css" />

    <link rel="icon" href="resource/app-store logo.png" />

</head>

<body class="main-body">
<?php include "header.php"; ?>

    <div class="container-fluid vh-100 d-flex justify-content-center">
        <div class="row align-content-center">

            <!-- header -->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo"></div>
                    <div class="col-12">
                        <p class="text-center title01">Hi, Welcome to Appstore</p>
                    </div>
                </div>
            </div>

            <!-- header -->

            <!-- content -->

            <div class="col-12 p-3">
                <div class="row">

                    <div class="col-6 d-none d-lg-block background"></div>
                    <!-- signupbox -->

                    <div class="col-12 col-lg-6" id="signUpBox">
                        <div class="row g-2">

                            <div class="col-12">
                                <p class="title02">Create New Account</p>
                            </div>

                            <div class="col-12 d-none" id="msgdiv">
                                <div class="alert alert-danger" role="alert" id="msg">

                                </div>
                            </div>

                            <div class="col-6">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="ex:- Amal" id="fname" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="ex:- Perera" id="lname" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="ex:- Amal123@gmail.com" id="email" />
                            </div>

                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="ex:- **********" id="password" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Mobile</label>
                                <input type="text" class="form-control" placeholder="ex:- 0771344568" id="mobile" />
                            </div>

                            <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender">



                                    <option value="1">Male</option>
                                    <option value="2">Female</option>


                                </select>
                            </div>
                            <br>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>

                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-dark">Already have an account? Sign In</button>
                            </div>

                        </div>
                    </div>

                    <!-- signupbox -->

                    <!-- signinbox -->

                    <div class="col-12 col-lg-6 d-none" id="signInBox">
                        <div class="row g-2">
                            <div class="col-12">
                                <p class="title02">Sign In</p>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" id="email2" value="" />
                            </div>
                            <div class="col-12">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password2" value="" />
                            </div>
                            <div class="col-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="rememberme" />
                                    <label class="form-check-label">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="link-primary">Forgot Password?</a>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-primary">Sign In</button>
                            </div>
                            <div class="col-12 col-lg-6 d-grid">
                                <button class="btn btn-danger">New to Appstore? Join Now</button>
                            </div>
                        </div>
                    </div>

                    <!-- signinbox -->

                </div>
            </div>

            <!-- content -->

            <!-- footer -->
            <div class="col-12 fixed-bottom d-none d-lg-block">
                <p class="text-center">&copy; 2024 Appstore.lk || All Rights Reserved</p>
            </div>
            <!-- footer -->

        </div>

    </div>
    <br><br><br><br><br>
    <hr>
    <?php include "footer.php"; ?>
    <script src="script.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>