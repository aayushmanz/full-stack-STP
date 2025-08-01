<?php
$msg = "";
if (isset($_POST['registerbutton'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = @mysqli_connect("localhost", "root", "", "florifydb");
    if (!$conn) {
        $msg = "<h4 style='color:red;'>Connection failed!</h4>";
    } else {
        $qry = "INSERT INTO users(name, email, password, role) VALUES('$name', '$email', '$password', 'client')";
        mysqli_query($conn, $qry);
        if (mysqli_affected_rows($conn) > 0) {
            $msg = "<h4 style='color:green;'>Account created successfully!</h4>";
        } else {
            $msg = "<h4 style='color:red;'>Account not created. Try again!</h4>";
        }
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register - Florify</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #ffb6c1, #ffe6f0);
      margin: 0;
      padding: 0;
      display: flex;
      height: 100vh;
      align-items: center;
      justify-content: center;
    }

    .register-container {
      background: rgba(255, 255, 255, 0.6);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      width: 90%;
      max-width: 450px;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #e91e63;
    }

    form input {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 1rem;
    }

    form button {
      width: 100%;
      padding: 12px;
      background-color: #e91e63;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      color: white;
      cursor: pointer;
      transition: background 0.3s;
    }

    form button:hover {
      background-color: #c2185b;
    }

    p {
      text-align: center;
      margin-top: 15px;
    }

    p a {
      color: #e91e63;
      text-decoration: none;
      font-weight: bold;
    }

    .error {
      border: 1px solid red;
    }

    .msg {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>

  <script>
    function validate() {
      const pass = document.getElementById("password");
      const cpass = document.getElementById("co_password");
      const phone = document.getElementById("phone");
      let isValid = true;

      // Reset styles
      [pass, cpass, phone].forEach(field => field.classList.remove("error"));

      // Password match check
      if (pass.value !== cpass.value) {
        pass.classList.add("error");
        cpass.classList.add("error");
        alert("Passwords do not match.");
        isValid = false;
      }

      // Phone validation
      if (phone.value.length !== 10 || isNaN(phone.value)) {
        phone.classList.add("error");
        alert("Enter a valid 10-digit phone number.");
        isValid = false;
      }

      return isValid;
    }
  </script>
</head>
<body>

  <div class="register-container">
    <div class="msg"><?php echo $msg; ?></div>
    <h2>Create Your Account</h2>
    <form action="register.php" method="post" onsubmit="return validate()">
      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="text" name="phone" id="phone" placeholder="Phone Number" required />
      <input type="text" name="username" placeholder="Username" required />
      <input type="password" name="password" id="password" placeholder="Password" required />
      <input type="password" name="co_password" id="co_password" placeholder="Confirm Password" required />
      <button type="submit" name="registerbutton">Register</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>

</body>
</html>
