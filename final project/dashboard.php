<?php
  include'menubar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Panel</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
    }

    header {
      background-color: #333;
      color: white;
      padding: 15px 20px;
      font-size: 24px;
    }

    nav {
      
      display: flex;
      padding: 10px 20px;
    }

    nav a {
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      position: relative;
    }

    nav a:hover {
      background-color: #666;
    }

    .dropdown {
      position: relative;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      
      top: 100%;
      left: 0;
      min-width: 160px;
      z-index: 1;
     
    }

    .dropdown-content a {
      display: block;
      padding: 10px 15px;
      color: white;
    }

    .dropdown-content a:hover {
      background-color: #666;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    main {
      padding: 20px;
      min-height: 400px;
    }
  </style>
</head>
<body>
  
  <header>
    Admin Panel of AYUz
  </header>
  
  
  <main>
    <h2>Or Kya Maje Admin Bhai</h2>
    <p>Huh paper aane me hai me toh fail hone wala hu.<br> Isliye socha aaj cheez hi bata du sab ko.</p>
  </main>

</body>
</html>
