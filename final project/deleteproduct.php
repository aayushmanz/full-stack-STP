<?php
    if (!isset($_GET['pid'])) {
        header("Location: addproduct.php");
        exit;
    }

    $pid = (int)$_GET['pid'];

require '../dbconfig.php';
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_query($con, "DELETE FROM products WHERE product_id = $pid");
    mysqli_close($con);

header("Location: viewallproducts.php");
?>