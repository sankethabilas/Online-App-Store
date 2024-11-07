<!DOCTYPE html>
<html>

<head>

  <title>Paid App Cards</title>
  <link rel="stylesheet" href="css/payment_read.css">
  <link rel="icon" href="resource/app-store logo.png" />

</head>

<body>

  <?php include "header2.php"; ?>

  <br><br>

  <?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appstore";
  $con = new mysqli($servername, $username, $password, $dbname, "3307");

  if ($con->connect_error) {
    die("Connection failed" . $con->connect_error);
  }

  $sql = "SELECT id,bank,cardnumber,name,address,zipcode,expiredate,cvv FROM payment";

  $result = $con->query($sql);

  if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<th>ID</th><th>Bank</th><th>Card Number</th><th>Name</th><th>Address</th><th>Zip Code</th><th>Expire Date</th><th>CVV</th><th>Action</th>";
    echo "</tr>";;
    while ($row = $result->fetch_assoc()) {

      echo "<tr>";
      echo "<td>" . $row["id"] . "</td>" . "<td>" . $row["bank"] . "</td>" . "<td>" . $row["cardnumber"] . "</td>" . "<td>" . $row["name"] . "</td>" . "<td>" . $row["address"] . "</td>" . "<td>" . $row["zipcode"] . "</td>" . "<td>" . $row["expiredate"] . "</td>" . "<td>" . $row["cvv"] . "</td>";
      echo "<td>
          <a href='payment_edit.php?id=" . htmlspecialchars($row["id"]) . "' 
   class='btn btn-edit' 
   style='background-color: #4CAF50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;'>
   Edit
</a>
<button class='btn btn-delete' 
        onclick='deleteRow(" . $row["id"] . ")' 
        style='background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>
   Delete
</button>

          </td>";
      echo "</tr>";
    }

    echo "</table>";
  } else {
    echo "No Results";
  }

  $con->close();

  ?>
  <?php include "footer.php"; ?>
  <script src="paymentscript.js"></script>
</body>

</html>