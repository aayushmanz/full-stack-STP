<?php
session_start();
include "mainmenu.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Floryfy - Your Cart</title>

  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

  <!-- jQuery & Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #fce3ec, #ffe2f0);
      margin: 0;
      padding: 0;
    }

    .container {
      margin-top: 50px;
    }

    .cart-box {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
      border-radius: 20px;
      padding: 25px;
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .cart-title {
      font-weight: 700;
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      color: #d63384;
    }

    .cart-table th, .cart-table td {
      vertical-align: middle !important;
      text-align: center;
    }

    .cart-table img {
      border-radius: 10px;
      border: 2px solid #fff;
      width: 90px;
      height: 90px;
      object-fit: cover;
    }

    .total-row {
      background-color: #fff3f8;
      font-weight: bold;
    }

    .btn-order {
      background-color: #d63384;
      color: white;
      border-radius: 30px;
      padding: 10px 25px;
      font-size: 16px;
      float: right;
      transition: 0.3s ease;
    }

    .btn-order:hover {
      background-color: #c2185b;
      color: #fff;
    }

    .empty-cart {
      text-align: center;
      padding: 100px 20px;
      color: #777;
    }

    .empty-cart a {
      margin-top: 20px;
    }

    @media (max-width: 768px) {
      .cart-table img {
        width: 60px;
        height: 60px;
      }

      .btn-order {
        float: none;
        display: block;
        margin: 20px auto 0;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="cart-box">
      <div class="cart-title">Your Shopping Cart</div>

      <?php
      if (isset($_COOKIE['cart']) && !empty($_COOKIE['cart'])) {
        $id = $_COOKIE['cart'];
        include("dbconfig.php");
        $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

        $qry = "SELECT * FROM products WHERE product_id IN ($id)";
        $resultset = mysqli_query($conn, $qry);

        if (mysqli_num_rows($resultset) > 0) {
          $total = 0;

          echo "<div class='table-responsive'>";
          echo "<table class='table cart-table table-bordered'>";
          echo "<thead><tr class='info'>
                  <th>Image</th>
                  <th>Product</th>
                  <th>Price</th>
                  <th>Remove</th>
                </tr></thead><tbody>";

          while ($row = mysqli_fetch_array($resultset)) {
            echo "<tr>";
            echo "<td><img src='$row[4]' alt='Product Image'></td>";
            echo "<td><strong>$row[1]</strong></td>";
            echo "<td><span style='color:#d63384;'>₹$row[2]</span></td>";
            echo "<td><a href='remove.php?pid=$row[0]' class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'></span></a></td>";
            echo "</tr>";
            $total += $row[2];
          }

          echo "<tr class='total-row'>
                  <td colspan='2'>Total</td>
                  <td colspan='2'>₹$total</td>
                </tr>";
          echo "</tbody></table>";
          echo "</div>";

          echo "<a href='shipping.php' class='btn btn-order'>Place Order</a>";

          $_SESSION['total'] = $total;
        } else {
          echo "<div class='empty-cart'><h3>Your cart is empty.</h3><a href='home.php' class='btn btn-success'>Continue Shopping</a></div>";
        }
      } else {
        echo "<div class='empty-cart'><h3>Your cart is empty.</h3><a href='home.php' class='btn btn-success'>Continue Shopping</a></div>";
      }
      ?>
    </div>
  </div>
</body>
</html>

<?php include "footer.php"; ?>
