<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appstore";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission for adding a new app
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $app_name = $_POST['app_name'];
    $category = $_POST['category'];
    $image_url = $_POST['image_url'];

    $sql = "INSERT INTO apps (app_name, category, image_url) VALUES ('$app_name', '$category', '$image_url')";
    $conn->query($sql);
}

// Fetch all apps from the database
$apps_result = $conn->query("SELECT * FROM apps");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New App</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="css/styleapp.css">
    <link rel="stylesheet" href="css/addnewapp.css">
</head>
<body>
<?php include "header.php"; ?>

    <h1>Add New App</h1>
    <form method="POST">
        <label for="app_name">App Name:</label>
        <input type="text" id="app_name" name="app_name" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" required><br><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" required><br><br>

        <input type="submit" value="Add App">
    </form>

    <h2>App List</h2>
    <table border="1">
        <tr>
            <th>App Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>

        <?php while ($row = $apps_result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $row['app_name']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><img src="<?php echo $row['image_url']; ?>" alt="app image" width="50"></td>
            <td>
                <a href="edit_app.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="deleat_app.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    <?php include "footer.php"; ?>
</body>
</html>

<?php $conn->close(); ?>
