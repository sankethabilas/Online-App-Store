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
                <li><a href="appsf.php">Apps</a></li>
                <li><a href="#games">Free Apps</a></li>
                <li><a href="#download">Paid Apps</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
            <div class="profile-icon">
                <a href="#"><img src="resource/profile (1).png" alt="User Profile"></a>
            </div>
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