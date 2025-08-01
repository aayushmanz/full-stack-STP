<?php
$val = $_GET['data'];
  include("dbconfig.php");

  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
  $qry = "SELECT * FROM products WHERE product_type='birthday' and product_name like '$val%'";
  $resultset = mysqli_query($conn, $qry);

  if (mysqli_num_rows($resultset) > 0) {
    $count = 0;
    while ($row = mysqli_fetch_assoc($resultset)) {
      if ($count == 0) {
        echo "<div class='row' style='margin-bottom:15px'>";
      }

      echo "<div class='col-sm-3'>";
      echo "<a href='desc.php?pid=$row[product_id]'>";
      echo "<div class='box'>";
      echo "<div class='row'><div class='col-sm-12'>";
      echo "<img src='{$row['product_image']}' alt='Product Image'>";
      echo "</div></div>";
      echo "<div class='row'><div class='col-sm-12'>";
      echo "<h4 style='padding-left:10px'>{$row['product_name']}</h4>";
      echo "</div></div>";
      echo "<div class='row'><div class='col-sm-12'>";
      echo "<h4 style='padding-left:10px'>&#8377; {$row['product_price']}</h4>";
      echo "</div></div>";
      echo "</div>";
       echo "</a>";
       echo "</div>";

      $count++;
      if ($count == 4) {
        echo "</div>"; // close row
        $count = 0;
      }
    }
    // If row wasn't closed (less than 4 items in last row)
    if ($count != 0) {
      echo "</div>";
    }
  } else {
    echo "<p class='text-danger text-center'>No birthday products found.</p>";
  }

  ?>