<?php
    if (!isset($_GET['uid'])) {
        header("Location: adduser.php");
        exit;
    }

    $uid = (int)$_GET['uid'];

require '../dbconfig.php';
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    mysqli_query($con, "DELETE FROM users WHERE user_id = $uid");
    mysqli_close($con);

header("Location: viewalluser.php");
?>



