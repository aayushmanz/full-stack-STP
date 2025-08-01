<!-- Keep your PHP session and menu as it is -->
<?php
session_start();
include "mainmenu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AYUz - Contact Us</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />
  <style>
    /* Same style — clean and classy */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #bf5afeff, #ffd6ec);
      color: #333;
    }

    .contact-section {
      padding: 60px 20px;
      max-width: 1000px;
      margin: auto;
    }

    .contact-card {
      background: rgba(255, 255, 255, 0.7);
      backdrop-filter: blur(10px);
      padding: 50px;
      border-radius: 25px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .contact-card h2 {
      color: #e91e63;
      margin-bottom: 40px;
      font-size: 36px;
      text-align: center;
    }

    form {
      display: grid;
      gap: 20px;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 15px;
      border-radius: 12px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    form button {
      background-color: #e91e63;
      color: white;
      padding: 14px;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      font-size: 16px;
      transition: background 0.3s ease;
    }

    form button:hover {
      background-color: #c2185b;
    }

    .contact-info {
      margin-top: 50px;
      text-align: center;
    }

    .map iframe {
      width: 100%;
      height: 350px;
      border: none;
      border-radius: 20px;
      margin-top: 30px;
    }

    /* Toast Alert */
    #toast {
      visibility: hidden;
      min-width: 250px;
      background-color: #333;
      color: #fff;
      text-align: center;
      border-radius: 12px;
      padding: 16px;
      position: fixed;
      z-index: 999;
      left: 50%;
      bottom: 50px;
      transform: translateX(-50%);
      font-size: 17px;
    }

    #toast.show {
      visibility: visible;
      animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @keyframes fadein {
      from { bottom: 30px; opacity: 0; }
      to { bottom: 50px; opacity: 1; }
    }

    @keyframes fadeout {
      from { bottom: 50px; opacity: 1; }
      to { bottom: 30px; opacity: 0; }
    }
  </style>
</head>

<body>

  <section class="contact-section">
    <div class="contact-card">
      <h2>Contact Us</h2>
      <form id="contactForm" method="post">
        <input type="text" id="name" name="name" placeholder="Your Full Name" required />
        <input type="email" id="email" name="email" placeholder="Your Email Address" required />
        <input type="tel" id="phone" name="phone" placeholder="Phone Number (optional)" />
        <input type="text" id="subject" name="subject" placeholder="Subject" required />
        <textarea id="message" name="message" rows="6" placeholder="Write your message..." required></textarea>
        <button type="submit">Send Message</button>
      </form>

      <div id="toast">Message sent successfully!</div>

      <div class="contact-info">
        <h3>Reach Out to Us</h3>
        <p>Email: support@ayushsutharkafullsupport.com</p>
        <p>Phone: +91 8000540243</p>
        <p>Address: Chittorgarh, Rajasthan, India</p>
      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=..." allowfullscreen loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const name = document.getElementById("name").value.trim();
      const email = document.getElementById("email").value.trim();
      const message = document.getElementById("message").value.trim();

      if (name === "" || email === "" || message === "") {
        alert("Please fill all required fields.");
        return;
      }

      // Simulate successful submission
      const toast = document.getElementById("toast");
      toast.className = "show";
      setTimeout(() => { toast.className = toast.className.replace("show", ""); }, 3000);

      // Optionally reset form
      this.reset();
    });
  </script>
</body>
</html>
<?php
include "footer.php";
?>