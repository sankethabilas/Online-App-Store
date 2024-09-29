<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="headerstyle.css">




    <link rel="icon" href="resource/app-store logo.png" />
</head>

<body>

    <!-- Nav bar -->

    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <a class="navbar-brand me-auto" href="#">
                <img src="resource/app-store logo.png" width="50px">
            </a>
            <label class="label">App store</label>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                        <img src="resource/app-store logo.png" width="50px">
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-center flex-grow-1 pe-5 ">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nx-lg-2 active" href="appsf.php">Apps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nx-lg-2 " href="#">Games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nx-lg-2" href="#">Download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nx-lg-2" href="#">QA</a>
                        </li>



                    </ul>

                </div>
            </div>
            <a href="#" class=" profile-btn button btn btn-outline-secondary">Profile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <!-- End navbar -->


    <script src="bootstrap.bundle.js"></script>
    <script src="bootstrap.js"></script>
</body>

</html>