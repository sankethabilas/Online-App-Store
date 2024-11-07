<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New App</title>
    <link rel="stylesheet" href="css/addfreeapps.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>
<body>
    <?php include "header2.php"; ?>
    <div class="container">
        <header>
            <h1>Add New App</h1>
            <p>Please fill in the details below to add a new app.</p>
        </header>
        
        <form action="addfreeapps.php" method="POST">
            <input type="text" name="app_name" placeholder="App Name" required><br><br>
            <input type="text" name="category" placeholder="Category" required><br><br>
            <input type="text" name="image_url" placeholder="Image URL" required><br><br>
            <textarea name="description" placeholder="App Description" required></textarea><br><br>
            <button type="submit" class="add-app-btn">Add App</button>
        </form>

        <?php
        include "connection.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $app_name = $_POST['app_name'];
            $category = $_POST['category'];
            $image_url = $_POST['image_url'];
            $description = $_POST['description'];

            $sql = "INSERT INTO apps (app_name, category, image_url, description) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $app_name, $category, $image_url, $description);

            if ($stmt->execute()) {
                echo '<p>New app added successfully!</p>';
            } else {
                echo '<p>Error: ' . $stmt->error . '</p>';
            }

            $stmt->close();
        }

        $conn->close();
        ?>
    </div><br><br><br><br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>
