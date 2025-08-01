<?php
session_start();
?>

<?php
$msg = "";
if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    include('dbconfig.php'); // make sure this file has DB credentials

    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    $qry = "SELECT * FROM users WHERE email = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) == 1) {

      $rows = mysqli_fetch_array($result);
        $_SESSION['uid']=$rows[0];
        $_SESSION['name']=$rows[1];

        header("Location: home.php");
    } else {
        $msg = "Invalid email or password!";
    }
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(10px);
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
      width: 300px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #fff;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 8px;
      outline: none;
    }

    button {
      width: 100%;
      padding: 10px;
      background: #6a11cb;
      background: linear-gradient(to right, #2575fc, #6a11cb);
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
    }

    button:hover {
      opacity: 0.9;
    }

    .msg {
      text-align: center;
      color: red;
    }
  </style>
</head>
<body>

  <form class="login-container" method="POST" action="login.php">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Enter Email" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <button type="submit" name="btnlogin">Login</button>
    <p class="msg"><?php if(isset($msg)) echo $msg; ?></p>
  </form>

</body>
</html>
