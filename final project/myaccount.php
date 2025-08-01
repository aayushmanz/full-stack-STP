<?php
session_start();
include "mainmenu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AYUz - My Account</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />
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

    .account-section {
      padding: 50px;
      max-width: 1200px;
      margin: auto;
    }

    .account-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 10px 35px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }

    .account-card h2 {
      color: #e91e63;
      margin-bottom: 20px;
      font-size: 30px;
    }

    .account-card p {
      line-height: 1.8;
      font-size: 18px;
    }

    .account-links {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      margin-top: 30px;
    }

    .account-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
      background: #fff;
      border-radius: 15px;
      text-align: center;
      text-decoration: none;
      color: #444;
      font-weight: bold;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
      transition: background 0.3s ease;
      font-size: 16px;
    }

    .account-links a:hover {
      background: #ffd6ec;
      color: #e91e63;
    }

    .account-features {
      margin-top: 50px;
    }

    .account-features h3 {
      font-size: 24px;
      color: #e91e63;
      margin-bottom: 20px;
    }

    .account-features ul {
      list-style: none;
      line-height: 2;
      padding-left: 20px;
    }

    .account-features ul li::before {
      content: '✔️';
      margin-right: 10px;
      color: #e91e63;
    }

    .footer {
      background: #ffe6f0;
      padding: 50px 40px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 30px;
    }

    .footer div h4 {
      margin-bottom: 15px;
      color: #e91e63;
    }

    .footer div ul {
      list-style: none;
    }

    .footer div ul li a {
      text-decoration: none;
      color: #555;
      line-height: 2;
    }

    .bottom-bar {
      text-align: center;
      padding: 20px;
      background: #ffcde6;
      font-size: 14px;
    }

    @media (max-width: 768px) {
      .account-section {
        padding: 20px;
      }
    }
  </style>
</head>

<body>
  

  <section class="account-section">
    <div class="account-card">
      <h2>Welcome to Your AYUz Account</h2>
      <p>Manage your profile, view past orders, update your personal information, and get personalized recommendations. Everything you need is in one place.</p>

      <div class="account-links">
        <a href="order.php">🛍️ View Orders</a>
        <a href="profile.php">👤 Profile Settings</a>
        <a href="address.php">🏠 Manage Addresses</a>
        <a href="wishlist.php">💖 Wishlist</a>
        <a href="notifications.php">🔔 Notifications</a>
        <a href="logout.php">🚪 Logout</a>
      </div>

      <div class="account-features">
        <h3>Account Features:</h3>
        <ul>
          <li>Track your deliveries in real-time</li>
          <li>Secure checkout and saved payment methods</li>
          <li>Special offers & discounts exclusively for you</li>
          <li>Manage newsletter subscriptions</li>
          <li>Receive birthday and anniversary reminders</li>
        </ul>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div>
      <h4>About AYUz</h4>
      <p>AYUz brings premium flowers right to your doorstep. Crafted with love and care to suit every occasion.</p>
    </div>
    <div>
      <h4>Quick Links</h4>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="occasion.php">Occasions</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="mycart.php">My Cart</a></li>
      </ul>
    </div>
    <div>
      <h4>Contact Us</h4>
      <p>Email: support@ayushsutharkafullsupport.com</p>
      <p>Phone: +91 8000540243</p>
      <p>Location: Chittorgarh, Rajasthan</p>
    </div>
    <div>
      <h4>Follow Us</h4>
      <ul>
        <li><a href="https://instagram.aayushmanz.in">Instagram</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>
  </footer>

  <div class="bottom-bar">© 2025 AYUz by Ayush. All rights reserved.</div>
</body>

</html>