<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appstore";

$conn = new mysqli($servername, $username, $password, $dbname,"3307");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all apps from the database
$apps_result = $conn->query("SELECT * FROM apps ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Store</title>

    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/styleapp.css">
    <link rel="stylesheet" href="css/button.css">
</head>

<body>


    <div class="container">
        <h1>Apps</h1>
        <input type="text" class="search-bar" placeholder="Search">

        <a href="add_app.php" class="add-button">Add New App</a>
        <br><br>

        <div class="apps-grid">
            <?php 
            // Loop through each app fetched from the database and display it
            while ($row = $apps_result->fetch_assoc()) { ?>
                <div class="app-card">
                    <div class="app-info">
                        <h3><?php echo htmlspecialchars($row['app_name']); ?></h3>
                        <p><?php echo htmlspecialchars($row['category']); ?></p>
                        <a href="#">Download</a>
                        <a href="#">Read more</a>
                    </div>
                    <div class="app-icon">
                        <img src="<?php echo htmlspecialchars($row['image_url']); ?>" height="100" width="100" alt="<?php echo htmlspecialchars($row['app_name']); ?> Logo">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <br><br><br><br><br>
    
    <script src="bootstrap.js"></script>
</body>

</html>

<?php
$conn->close(); // Close the database connection
?>
