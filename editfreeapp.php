<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Free Apps</title>
    <link rel="stylesheet" href="css/editfreeapp.css">
    <link rel="icon" href="resource/app-store logo.png" />
</head>
<body>
    <?php include "header2.php"; ?>
    <div class="container">
        <header>
            <h1>Edit Free Apps</h1>
            <p>Manage your apps by editing or deleting them.</p>
        </header>
        
        <table>
            <thead>
                <tr>
                    <th>App Name</th>
                    <th>Category</th>
                    <th>Image URL</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "connection.php";

                $sql = "SELECT * FROM apps";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . htmlspecialchars($row["app_name"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["category"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["image_url"]) . '</td>';
                        echo '<td>' . htmlspecialchars($row["description"]) . '</td>';
                        echo '<td>';
                        echo '<a href="editappform.php?id=' . $row["id"] . '" class="edit-btn">Edit</a>';
                        echo '<a href="deleteapp.php?id=' . $row["id"] . '" class="delete-btn">Delete</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No apps available.</td></tr>';
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    <br><br><br><br><br><br>
    <?php include "footer.php"; ?>
   
</body>
</html>
