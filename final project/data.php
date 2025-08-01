<?php
$val = $_GET['pid'];
$users = ["Amit", "Sumit", "Ravi", "Aman", "Ankit", "Rohan", "Rajat", "Santosh", "Sachin", "Sohan", "Rahul"];

if ($val == "") {
    echo "";
} else {
    for ($i = 0; $i < count($users); $i++) {
        if (str_starts_with($users[$i], $val)) {
            echo $users[$i] . "<br>";
        }
    }
}
?>
