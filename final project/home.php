<?php
session_start();
include "mainmenu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Floryfy - Premium Flower Delivery</title>
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

    .banner {
  position: relative;
  height: 80vh;
  background-image: url('https://th.bing.com/th/id/R.34fb44e2ecedad48e98342910d01d0f7?rik=%2b1Ne24slg1cRTg&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f05%2fCherry-blossom-tree-wallpapers-flowers.jpg&ehk=7Noc7yw5%2bl1YLhuYFkkzszu%2b0fXJyS2xYHO7BvytebA%3d&risl=&pid=ImgRaw&r=0'); /* Aesthetic flower background */
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
  background-color: rgba(0, 0, 0, 0.16); /* semi-transparent dark overlay */
  padding: 40px 60px;
  border-radius: 20px;
  
}

.banner h1 {
  color: #fff;
  font-size: 3.5rem;
  text-align: center;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  text-shadow: 2px 2px 10px rgba(255, 255, 255, 0.5);
  animation: fadeIn 2s ease-in-out;
}

/* Smooth fade-in animation */
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(-20px); }
  to { opacity: 1; transform: translateY(0); }
}
    .carousel {
      margin: 40px auto;
      width: 90%;
      overflow: hidden;
      position: relative;
    }

    .carousel-track {
      display: flex;
      animation: slide 20s infinite linear;
    }

    .carousel-track img {
      width: 100%;
      max-width: 400px;
      margin-right: 20px;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }

    @keyframes slide {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }

    .product-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      padding: 40px;
    }

    .product-card {
      background: rgba(255, 255, 255, 0.4);
      backdrop-filter: blur(10px);
      padding: 20px;
      border-radius: 20px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: scale(1.03);
    }

    .product-card img {
      width: 100%;
      border-radius: 14px;
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
    /* Responsive fixes */
@media (max-width: 768px) {
  header {
    flex-direction: column;
    align-items: flex-start;
    padding: 15px 20px;
  }

  nav ul {
    flex-direction: column;
    gap: 10px;
    width: 100%;
  }

  nav ul li ul {
    position: static;
    width: 100%;
  }

  nav ul li ul li {
    padding: 8px;
    width: 100%;
  }

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

  .carousel-track {
    flex-wrap: nowrap;
    gap: 10px;
    animation: none;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    -webkit-overflow-scrolling: touch;
  }

  .carousel-track img {
    max-width: 80%;
    flex-shrink: 0;
    scroll-snap-align: start;
  }

  .product-section {
    grid-template-columns: 1fr;
    padding: 20px;
  }

  .footer {
    grid-template-columns: 1fr;
    padding: 20px;
  }

  .footer div {
    margin-bottom: 20px;
  }
}

  </style>
</head>

<body>

  <section class="banner">
  <div class="banner-overlay">
    <h1>Fresh Flowers Delivered with Love</h1>
  </div>
</section>

  <section class="carousel">
    <div class="carousel-track">
      <img src="https://image.floranext.com/shared/catalog/product/t/u/tulips-wrapped-with-love.jpg.webp?h=700&w=700&r=255&g=255&b=255" alt="Bouquet 1">
      <img src="https://www.fnp.ae/images/pr/l/v20240206130015/pink-white-tulips-bunch_1.jpg" alt="Bouquet 2">
      <img src="https://tse1.mm.bing.net/th/id/OIP.N8Y9XP7kFOcBUxCmZosKiwHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bouquet 3">
      <img src="https://i1.fnp.sg/images/pr/l/v20210831191641/lovely-pink-n-light-pink-tulips-bouquet_2.jpg" alt="Bouquet 4">
      <img src="https://img.freepik.com/premium-photo/bouquet-tulips-black-background_140916-3287.jpg" alt="Bouquet 5">
    </div>
  </section>

  <section class="product-section">
    <div class="product-card">
      <img src="https://cdn11.bigcommerce.com/s-c3hmyjvqdu/images/stencil/2560w/products/669/963/Half_Dozen_Red_Roses__53387.1516720736.jpg?c=2" alt="Bouquet A">
      <h3>Bouquet A</h3>
      <p>₹499 - Pink Roses</p>
    </div>
    <div class="product-card">
      <img src="https://www.avasflowers.net/img/prod_img/avasflowers-white-lily-bouquet-farm-fresh-15-blooms-with-vase-15481.jpg" alt="Bouquet B">
      <h3>Bouquet B</h3>
      <p>₹599 - White Lilies</p>
    </div>
    <div class="product-card">
      <img src="https://cdn1.1800flowers.com/wcsstore/Flowers/images/catalog/191382lx.jpg" alt="Bouquet C">
      <h3>Bouquet C</h3>
      <p>₹699 - Mixed Fresh Flowers</p>
    </div>
    <div class="product-card">
      <img src="https://th.bing.com/th/id/R.284884229b9169278bba415816416ddd?rik=1qSwglvLxASYfw&riu=http%3a%2f%2fritasfloraldesigns.com%2fwp-content%2fuploads%2f2012%2f11%2fIMG_3389.jpg&ehk=a8GDRKF2xzK04AtLo%2fOumIJkh4mOqldMnED4yeZ9w4U%3d&risl=&pid=ImgRaw&r=0" alt="Bouquet D">
      <h3>Bouquet D</h3>
      <p>₹899 - Custom Arrangement</p>
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
        <li><a href="#">Occasions</a></li>
        <li><a href="#">Login</a></li>
        <li><a href="#">My Cart</a></li>
      </ul>
    </div>
    <div>
      <h4>Contact Us</h4>
      <p>Email: support@ayushsutharkafullsupport.com</p>
      <p>Phone: +91 8000540243</p>
      <p>Location: chittorgarh, Rajasthan</p>
    </div>
    <div>
      <h4>Follow Us</h4>
      <ul>
        <li><a href="instagram.aayushmanz.in">Instagram</a></li>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Twitter</a></li>
      </ul>
    </div>
  </footer>

  <div class="bottom-bar">© 2025 AYUz by Ayush. All rights reserved.</div>
</body>

</html>