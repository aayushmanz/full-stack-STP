
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
     

    header {
      backdrop-filter: blur(12px);
      background: rgba(255, 255, 255, 0.3);
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 28px;
      font-weight: 700;
      color: #e91e63;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    nav ul li {
      position: relative;
    }

    nav ul li a {
      text-decoration: none;
      color: #444;
      padding: 8px 15px;
      border-radius: 12px;
      transition: 0.3s;
    }

    nav ul li a:hover {
      background: rgba(255, 255, 255, 0.4);
      color: #e91e63;
    }

    nav ul li ul {
      display: none;
      position: absolute;
      top: 40px;
      left: 0;
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    nav ul li:hover ul {
      display: block;
    }

    nav ul li ul li {
      width: 160px;
      padding: 10px;
    }

</style>
</head>
<body>
    <header>
    <div class="logo">🌷 AYUz</div>
    <nav>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="occasion.php">Occasions</a>
          <ul>
            <li><a href="birthday.php">Birthday</a></li>
            <li><a href="anniversary.php">Anniversary</a></li>
          </ul>
        </li>
        <li><a href="myaccount.php"><?php
        if(isset($_SESSION['name'])){
          echo $_SESSION['name'];
        }
        else{
          echo "My Account";
        }
        ?></a>
          <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="order.php">View Orders</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="shipping.php">Shipping</a></li>
          </ul>
        </li>
        <li><a href="mycart.php">My Cart</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>