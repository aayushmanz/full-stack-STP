<?php
    $id = $_GET['pid'];
    $data = $_COOKIE['cart'];
    $arr = explode(",", $data);
    $key = array_search($id, $arr);
    array_splice($arr, $key, 1); // only this is needed
    $data = implode(",", $arr);
    setcookie("cart", $data);
    header("location:mycart.php");
?>
