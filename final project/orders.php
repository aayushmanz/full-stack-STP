<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All Users</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<?php include 'menubar.php'; ?>

<?php
include("../dbconfig.php");

$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

$qry = "SELECT * FROM orders";
$resultset = mysqli_query($conn, $qry);

if (mysqli_num_rows($resultset) > 0) {
    echo "<div class='container'>";
    echo "<h2 class='text-center text-primary'>All Orders</h2>";
    echo "<table class='table table-bordered table-striped'>";
    echo "<tr class='info'>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Product ID</th>
            <th>Address</th>
            <th>Order Amount</th>
            <th>Payment Mode</th>
            <th>Order Status</th>
            <th>Action</th>
          </tr>";

    while ($row = mysqli_fetch_array($resultset)) {
        echo "<tr>";
        echo "<td>{$row[0]}</td>";
        echo "<td>{$row[1]}</td>";
        echo "<td>{$row[2]}</td>";
        echo "<td>{$row[3]}</td>";
        echo "<td>{$row[4]}</td>";
        echo "<td>{$row[5]}</td>";
        echo "<td>{$row[6]}</td>";
        echo "<td><a href='deleteproduct.php?oid={$row[0]}' class='glyphicon glyphicon-trash' style='color:red; font-size: 20px;'></a></td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
} else {
    echo "<h1 class='text-danger text-center'>No record found!!!</h1>";
}

mysqli_close($conn);
?>

</body>
</html>
