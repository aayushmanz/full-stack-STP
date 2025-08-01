<?php
    if (!isset($_GET['oid'])) {
        header("Location: orders.php");
        exit;
    }

    $uid = (int)$_GET['oid'];

require '../dbconfig.php';
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_query($con, "DELETE FROM orders WHERE order_id = $oid");
    mysqli_close($con);

header("Location: orders.php");
?>
