<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('location:login.php');
    exit;
}

include "mainmenu.php";
$msg = "";

if (isset($_POST['btnorder'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $no = $_POST['phone'];
    $add = $_POST['address'];
    $address = "$name, $add, $email, $no";
    $paymethod = $_POST['payment_method'];

    include("dbconfig.php");
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    $userId = $_SESSION['uid'];
    $productIds = mysqli_real_escape_string($conn, $_COOKIE['cart']);
    $amount = $_SESSION['total'];

    $qry = "INSERT INTO orders(user_id, product_id, address, order_amount, payment_mode, order_status)
            VALUES ('$userId', '$productIds', '$address', '$amount', '$paymethod', 'pending')";

    if (mysqli_query($conn, $qry)) {
        $msg = "<div class='alert alert-success text-center'><strong>✔️ Order placed successfully!</strong></div>";
        // Optionally clear the cart
        setcookie("cart", "", time() - 3600, "/");
    } else {
        $msg = "<div class='alert alert-danger text-center'><strong>❌ Failed to place order.</strong></div>";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shipping Details - Floryfy</title>

  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

  <style>
    * {
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #ffe0f0, #f8e3f3);
      margin: 0;
      padding: 0;
    }

    .shipping-form {
      max-width: 600px;
      margin: 50px auto;
      background: rgba(255, 255, 255, 0.2);
      padding: 30px;
      border-radius: 20px;
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    }

    .shipping-form h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #d63384;
      font-weight: 700;
    }

    .form-group label {
      font-weight: bold;
      color: #333;
    }

    .form-control {
      border-radius: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      font-size: 14px;
      transition: border-color 0.3s;
    }

    .form-control:focus {
      border-color: #d63384;
      box-shadow: none;
    }

    .radio-group {
      display: flex;
      justify-content: space-between;
      gap: 15px;
      margin-top: 8px;
    }

    .radio-group label {
      font-weight: normal;
    }

    .btn-submit {
      background-color: #d63384;
      color: white;
      padding: 12px;
      font-size: 16px;
      border: none;
      border-radius: 30px;
      width: 100%;
      transition: 0.3s;
    }

    .btn-submit:hover {
      background-color: #c2185b;
    }

    .alert {
      max-width: 600px;
      margin: 20px auto;
      border-radius: 10px;
    }

    @media (max-width: 600px) {
      .radio-group {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <?php echo $msg; ?>

  <form class="shipping-form" method="POST">
    <h2>Shipping Details</h2>

    <div class="form-group">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="name" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone Number</label>
      <input type="tel" id="phone" name="phone" class="form-control" required pattern="[0-9]{10}">
    </div>

    <div class="form-group">
      <label for="address">Street Address</label>
      <textarea id="address" name="address" rows="3" class="form-control" required></textarea>
    </div>

    <div class="form-group">
      <label>Payment Method</label>
      <div class="radio-group">
        <label><input type="radio" name="payment_method" value="Cash on Delivery" required> Cash</label>
        <label><input type="radio" name="payment_method" value="UPI" required> UPI</label>
        <label><input type="radio" name="payment_method" value="Card" required> Card</label>
      </div>
    </div>

    <button type="submit" name="btnorder" class="btn-submit">Place Order</button>
  </form>
</body>
</html>
<?php
include "footer.php";
?>