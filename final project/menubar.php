<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Menubar</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
    }

    nav {
      background: #2c3e50;
      display: flex;
      align-items: center;
      padding: 0 30px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 999;
    }

    nav a {
      color: white;
      text-decoration: none;
      padding: 15px 20px;
      display: block;
      position: relative;
      transition: background 0.3s ease, color 0.3s ease;
    }

    nav a:hover {
      background: #34495e;
      color: #ffeb3b;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      background: #34495e;
      border-radius: 0 0 6px 6px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      min-width: 200px;
      z-index: 1000;
    }

    .dropdown-content a {
      padding: 12px 20px;
      color: #fff;
      white-space: nowrap;
    }

    .dropdown-content a:hover {
      background-color: #3d566e;
    }

    .dropdown:hover .dropdown-content {
      display: block;
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(10px);}
      to {opacity: 1; transform: translateY(0);}
    }

    main {
      padding: 100px 30px 40px; /* Add top padding so content doesn't hide behind navbar */
    }
  </style>
</head>
<body>

  <nav>
    <a href="dashboard.php">Dashboard</a>

    <div class="dropdown">
      <a href="#">Users</a>
      <div class="dropdown-content">
        <a href="adduser.php"> Add New User</a>
        <a href="viewalluser.php"> View All Users</a>
      </div>
    </div>

    <div class="dropdown">
      <a href="#">Products</a>
      <div class="dropdown-content">
        <a href="addproduct.php"> Add New Product</a>
        <a href="viewallproducts.php"> View All Products</a>
      </div>
    </div>

    <a href="orders.php">Orders</a>
    <a href="#">Logout</a>
  </nav>
 <p> <br> <br> </P>

</body>
</html>
