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

// Fetch app data based on id
$id = intval($_GET['id']);
$sql = "SELECT * FROM apps WHERE id = $id";
$result = $conn->query($sql);
$app = $result->fetch_assoc();

// Update app details
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $app_name = $conn->real_escape_string($_POST['app_name']);
    $category = $conn->real_escape_string($_POST['category']);
    $image_url = $conn->real_escape_string($_POST['image_url']);

    $update_sql = "UPDATE apps SET app_name='$app_name', category='$category', image_url='$image_url' WHERE id=$id";
    if ($conn->query($update_sql) === TRUE) {
        header("Location: add_app.php"); // Redirect to app list
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit App</title>
    <link rel="stylesheet" href="css/addnewapp.css">
</head>
<body>

    <h1>Edit App</h1>
    <form method="POST">
        <label for="app_name">App Name:</label>
        <input type="text" id="app_name" name="app_name" value="<?php echo htmlspecialchars($app['app_name']); ?>" required><br><br>

        <label for="category">Category:</label>
        <input type="text" id="category" name="category" value="<?php echo htmlspecialchars($app['category']); ?>" required><br><br>

        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" value="<?php echo htmlspecialchars($app['image_url']); ?>" required><br><br>

        <input type="submit" value="Update App">
    </form>

</body>
</html>

<?php $conn->close(); ?>
