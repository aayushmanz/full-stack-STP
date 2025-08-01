<?php
session_start();
include "mainmenu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Anniversary Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Bootstrap 3 CSS CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
  
  <!-- jQuery & Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #ffe0f0, #ffd6ec);
      color: #333;
    }

    h2 {
      font-weight: 700;
      margin: 30px 0 20px;
    }

    .box {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 16px;
      padding: 10px;
      margin-bottom: 20px;
      height: 370px;
      overflow: hidden;
      backdrop-filter: blur(10px);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .box img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
    }

    .product-info {
      padding: 10px;
    }

    .product-info h4 {
      margin: 5px 0;
      font-size: 18px;
      font-weight: 600;
    }

    .product-info .price {
      color: #d63384;
      font-weight: bold;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    hr {
      border-top: 2px solid #d63384;
      width: 60px;
      margin: 10px auto 30px;
    }
  </style>
</head>

<body>

<div class="container">
  <h2 class="text-center">Anniversary Products</h2>
  <hr>

  <?php
  include("dbconfig.php");

  $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
  $qry = "SELECT * FROM products WHERE product_type='anniversary'";
  $resultset = mysqli_query($conn, $qry);

  if (mysqli_num_rows($resultset) > 0) {
    $count = 0;
    while ($row = mysqli_fetch_assoc($resultset)) {
      if ($count === 0) {
        echo "<div class='row'>";
      }

      echo "<div class='col-sm-6 col-md-3'>";
      echo "<a href='desc.php?pid={$row['product_id']}'>";
      echo "<div class='box'>";
      echo "<img src='{$row['product_image']}' alt='Product Image'>";
      echo "<div class='product-info'>";
      echo "<h4>{$row['product_name']}</h4>";
      echo "<h4 class='price'>&#8377; {$row['product_price']}</h4>";
      echo "</div>";
      echo "</div>";
      echo "</a>";
      echo "</div>";

      $count++;
      if ($count === 4) {
        echo "</div>"; // close row
        $count = 0;
      }
    }

    if ($count !== 0) {
      echo "</div>"; // close last incomplete row
    }

  } else {
    echo "<p class='text-danger text-center'>No anniversary products found.</p>";
  }
  ?>
</div>

<?php include "footer.php"; ?>

</body>
</html>
