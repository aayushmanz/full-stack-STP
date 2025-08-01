<?php
session_start();
if(!isset($_SESSION['name'])){
  header("location:login.php");
}
include 'mainmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* You can add styles here */
  </style>
</head>
<body>

  <div class="container-fluid">
    <div class="row" style="height: 750px;">
      <!-- Page Content Here -->
    </div>
  </div>
</body>
</html>
<?php
include 'footer.php';
?>
