<?php
$msg ="";
 if(isset($_POST['user-btn'])){

            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $phone = $_POST["phone"];
            $role = $_POST["role"];
            $conn = @mysqli_connect("localhost","root","","florifydb");

            if($conn==null){
                $msg ="<h2><font color ='red'>CONNCETION FAILED!!!!</font></h2>";
            }
            else{
                $qry ="insert into users(name,email,phone,password,role) values('$name','$email',$phone,'$password','$role')";
                mysqli_query($conn, $qry);
                if(mysqli_affected_rows($conn)>0){
                    $msg ="<h2><font color ='green'> account created successfully</font></h2>";
                }
                else{
                     $msg ="<h2><font color ='red'> account not created (try again)!!!!</font></h2>";
                }
                mysqli_close($conn);
            }

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add New User</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #7fa2cbff;
      margin: 0;
      padding: 0;
    }

    .form-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 60px); /* adjust if menubar is tall */
    }

    .form-container {
        margin-top:70px;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      margin-top: 15px;
    }

    input, select {
      width: 100%;
      padding: 8px;
      margin-top: 3px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <?php include 'menubar.php'; ?>

  <div class="form-wrapper">
    <div class="form-container">
        <?php
        echo $msg;
        ?>
      <h2>Add New User</h2>
      <form method ="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm">Confirm Password</label>
        <input type="password" id="confirm" name="confirm" required>

        <label for="phone">Phone</label>
        <input type="number" id="phone" name="phone">

        <label for="role">Role</label>
        <select id="role" name="role">
          <option value="client">Client</option>
          <option value="admin">Admin</option>
        </select>

        <button type="submit" name ="user-btn">Submit</button>
      </form>
    </div>
  </div>

</body>
</html>
