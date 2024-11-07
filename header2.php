<?php
session_start();


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: signup.php"); 
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store||Header</title>
    <link rel="stylesheet" href="css/header2.css">
   
</head>

<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">
                <img src="resource/app-store logo.png" alt="App Store Logo">
                <span>App Store</span>
            </div>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="freeapps.php">Free Apps</a></li>
                <li><a href="paidApps.php">Paid Apps</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
            </ul>

            <?php
            include "connection.php";

            if (isset($_SESSION["u"])) {
                $email = $_SESSION["u"]["email"];
                
                $sql1 = "SELECT * FROM user WHERE email = ?";
                $stmt = $conn->prepare($sql1);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $user_rs = $stmt->get_result();
                $user_details = $user_rs->fetch_assoc();
            ?>
                <div class="user-profile">
                    <div class="profile-icon">
                        <a href="userProfile.php"><img src="resource/profile (1).png" alt="User Profile"></a>
                    </div>
                    <div class="ptext">Hi, <?php echo htmlspecialchars($user_details["fname"]); ?> welcome</div>
                    <form method="post" style="display: inline;">
                        <button type="submit" name="logout" class="logout-btn">Logout</button>
                    </form>
                </div>
            <?php
            } else {
            ?>
                <div class="login-signup">
                    <a href="signup.php" class="login-btn">Login</a>
                    <a href="signup.php" class="signup-btn">Sign Up</a>
                </div>
            <?php
            }
            ?>
        </nav>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentLocation = location.href;
            var menuItems = document.querySelectorAll('.nav-links a');
            var menuLength = menuItems.length;
            for (var i = 0; i < menuLength; i++) {
                if (menuItems[i].href === currentLocation) {
                    menuItems[i].classList.add('active');
                }
            }
        });
    </script>
</body>

</html>