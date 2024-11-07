<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free Apps for You</title>
    <link rel="stylesheet" href="css/freeapps.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>
<body>
    <?php include "header2.php"; ?>
    <div class="container">
        <header>
            <h1>Free Apps for You</h1>
            <p>Discover a wide range of free apps to enhance your digital experience. Browse our selection and find the perfect app for your needs.</p>
            <a href="addfreeapps.php" class="add-app-btn">Add  App</a>
            <a href="editfreeapp.php" class="add-app-btn">Edit App </a>
        </header>
        <br><br><br>
        <div class="app-grid">
            <?php
            include "connection.php";

            $sql = "SELECT * FROM apps";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="app-card">';
                    echo '<img src="' . $row["image_url"] . '" alt="' . $row["app_name"] . '" >';
                    echo '<h2>' . $row["app_name"] . '</h2>';
                    echo '<p class="category">Category: ' . $row["category"] . '</p>';
                    
                    $description = strlen($row["description"]) > 100 ? substr($row["description"], 0, 100) . '...' : $row["description"];
                    echo '<p class="description">' . $description . '</p>';
                    
                    echo '<button class="get-btn">Download</button>';
                    echo '</div>';
                }
            } else {
                echo '<p>No apps available. Please add new apps.</p>';
            }

            $conn->close();
            ?>
        </div>
    </div><br><br><br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>
