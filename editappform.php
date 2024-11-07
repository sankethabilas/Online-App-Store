<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit App</title>
    <link rel="stylesheet" href="css/addfreeapps.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>
<body>
    <?php include "header2.php"; ?>
    <div class="container">
        <header>
            <h1>Edit App</h1>
            <p>Update the app details below.</p>
        </header>

        <?php
        include 'connection.php';

        $app_id = $_GET['id'];
        $sql = "SELECT * FROM apps WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $app_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            ?>

            <form action="updateapp.php?id=<?php echo $app_id; ?>" method="POST">
                <input type="text" name="app_name" placeholder="App Name" value="<?php echo htmlspecialchars($row['app_name']); ?>" required><br><br>
                <input type="text" name="category" placeholder="Category" value="<?php echo htmlspecialchars($row['category']); ?>" required><br><br>
                <input type="text" name="image_url" placeholder="Image URL" value="<?php echo htmlspecialchars($row['image_url']); ?>" required><br><br>
                <textarea name="description" placeholder="App Description" required><?php echo htmlspecialchars($row['description']); ?></textarea><br><br>
                <button type="submit" class="add-app-btn">Update App</button>
            </form>

            <?php
        } else {
            echo '<p>App not found.</p>';
        }

        $stmt->close();
        $conn->close();
        ?>
    </div>
    <br><br><br>
    <?php include "footer.php"; ?>
</body>
</html>
