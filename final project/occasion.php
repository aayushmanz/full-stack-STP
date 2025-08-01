<?php
session_start();
include "mainmenu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Floryfy - Occasions</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(to bottom, #ff0044, #ffe6e9);
      margin: 0;
      padding: 0;
    }

    .banner {
      position: relative;
      height: 80vh;
      background-image: url('https://wallpapercave.com/wp/ctHyYBy.jpg');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
      border-radius: 20px;
      margin: 20px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
    }

    .banner-overlay {
      background-color: rgba(0, 0, 0, 0.2);
      padding: 40px 60px;
      border-radius: 20px;
    }

    .banner h1 {
      color: #fff;
      font-size: 3.5rem;
      text-align: center;
      text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.6);
      animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .occasion-card {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(8px);
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .occasion-card:hover {
      transform: scale(1.03);
    }

    .occasion-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
    }

    .occasion-card .card-body {
      padding: 20px;
      text-align: center;
    }

    .occasion-card h5 {
      font-weight: 700;
      color: #e91e63;
    }

    .btn-shop {
      background-color: #e91e63;
      color: white;
      border-radius: 30px;
      padding: 8px 20px;
      margin-top: 10px;
      transition: 0.3s;
      text-decoration: none;
      display: inline-block;
    }

    .btn-shop:hover {
      background-color: #c2185b;
      color: white;
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
      padding: 0;
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
      .banner {
        height: 60vh;
        margin: 10px;
      }

      .banner-overlay {
        padding: 20px 30px;
      }

      .banner h1 {
        font-size: 2rem;
      }

      .footer {
        grid-template-columns: 1fr;
        padding: 20px;
      }
    }
  </style>
</head>

<body>

  <section class="banner">
    <div class="banner-overlay">
      <h1>Explore Your Occasions</h1>
    </div>
  </section>

  <div class="container my-4">
    <div class="row g-4">

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://3.bp.blogspot.com/-YU8ZOfuyVP8/U39I28KVZMI/AAAAAAAAAh4/jF1oc1PfpqY/s1600/PF_11_00000000B316_VA0122_BDAY_W1_SQ.jpg" alt="Birthday">
          <div class="card-body">
            <h5>Birthday Flowers</h5>
            <p>Celebrate their special day with joyful blooms.</p>
            <a href="productdetails.php?pid=1" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://wallpapers.com/images/hd/anniversary-bouquet-of-red-roses-epcp2p656z0vq4g2.jpg" alt="Anniversary">
          <div class="card-body">
            <h5>Anniversary Bouquets</h5>
            <p>Express everlasting love with classic arrangements.</p>
            <a href="productdetails.php?pid=2" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://media.glamour.com/photos/5695b70ad9dab9ff41b3f29a/master/pass/weddings-2015-02-best-wedding-flowers-bridal-bouquets-0202-instagram-main.jpg" alt="Wedding">
          <div class="card-body">
            <h5>Wedding Florals</h5>
            <p>Elegant flowers for the most memorable day.</p>
            <a href="#" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://i.pinimg.com/originals/4c/05/c5/4c05c50cb33c583580ac6a2fac38797f.jpg" alt="Valentine's Day">
          <div class="card-body">
            <h5>Valentine’s Day</h5>
            <p>Romantic flowers to express your true love.</p>
            <a href="#" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://wallpapers.com/images/hd/colorful-flowers-happy-mother-s-day-n6hzak3axmragr2a.jpg" alt="Mother’s Day">
          <div class="card-body">
            <h5>Mother’s Day</h5>
            <p>Say “Thank You” with heartfelt bouquets.</p>
            <a href="#" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

      <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="occasion-card">
          <img src="https://miro.medium.com/v2/resize:fit:1080/1*ZQX-3v83A7K5SI2Tpq_zRg.png" alt="Get Well Soon">
          <div class="card-body">
            <h5>Get Well Soon</h5>
            <p>Bring a smile with bright, cheerful flowers.</p>
            <a href="#" class="btn-shop">Shop Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
    <div>
      <h4>About AYUz</h4>
      <p>AYUz brings premium flowers right to your doorstep. Crafted with love and care to suit every occasion.</p>
    </div>
    <div>
      <h4>Quick Links</h4>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Occasions</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">My Cart</a></li>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
