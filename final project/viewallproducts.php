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

<?php
include 'menubar.php';
?>

<?php
include ("../dbconfig.php");
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

$qry = "SELECT * FROM products";
$resultset = mysqli_query($conn, $qry);

if (mysqli_num_rows($resultset) > 0) {
    echo "<table class='table table-bordered table-striped'>";
    echo "<tr class='info'>";
    echo "<th>product ID</th>";
    echo "<th>product Name</th>";
    echo "<th>product price</th>";
    echo "<th>product description</th>";
    echo "<th>product image</th>";
    echo "<th>product Type</th>";
    echo "<th>Action</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($resultset)) {
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td><a href='deleteproduct.php?pid=$row[0]' class='glyphicon glyphicon-trash' style='color:red; font-size: 20px;'></a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<h1 class='text-danger text-center'>No record found!!!</h1>";
}

mysqli_close($conn);
?>

</body>
</html>
