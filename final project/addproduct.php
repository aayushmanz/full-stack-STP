<?php include 'menubar.php'; ?>
<?php
$msg = "";
if (isset($_POST["addbtn"])) {
    $name = $_POST["product_name"];
    $type = $_POST["product_type"];
    $price = $_POST["product_price"];
    $desc = $_POST["product_description"];
    $img = "";
    $source = $_FILES["product_image"]["tmp_name"];
    $des = $_SERVER['DOCUMENT_ROOT'] . "/flower_website/product/" . $_FILES['product_image']['name'];
    
    if (move_uploaded_file($source, $des)) {
        $img = "product/" . $_FILES['product_image']['name'];
    }

    $conn = mysqli_connect("localhost", "root", "", "florifydb");
    $qry = "INSERT INTO products(product_name, product_type, product_price, product_description, product_image) 
            VALUES('$name', '$type', $price, '$desc', '$img')";
    mysqli_query($conn, $qry);

    if (mysqli_affected_rows($conn) > 0) {
        $msg = "<h2><font color='green'>Successfully added</font></h2>";
    } else {
        $msg = "<h2><font color='red'>Try again!!!</font></h2>";
    }
    $desc = mysqli_real_escape_string($conn, $_POST['product_description']);

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add New Product</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ccd2d6ff;
      margin: 0;
      padding: 40px;
    }

    .form-container {
      background-color: #fff;
      max-width: 600px;
      margin: auto;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="number"],
    textarea,
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    input[type="file"] {
      margin-bottom: 20px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 12px;
      background-color: #28a745;
      color: white;
      font-size: 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <?php
       echo $msg;
     ?>
    <h2>Add New Product</h2>
    <form method ="post" enctype="multipart/form-data">
      <label for="name">Product Name</label>
      <input type="text" id="name" name="product_name" placeholder="Enter product name" required>

      <label for="type">Product Type</label>
      <select id="type" name="product_type" required>
        <option value="">--Select Type--</option>
        <option value="Birthday">Birthday</option>
        <option value="Anniversary">Anniversary</option>
      </select>

      <label for="price">Product Price (₹)</label>
      <input type="number" id="price" name="product_price" placeholder="Enter price" required>

      <label for="desc">Product Description</label>
      <textarea id="desc" name="product_description" placeholder="Enter product description" required></textarea>

      <label for="image">Product Image</label>
      <input type="file" id="image" name="product_image" accept="image/*" required>

      <button type="submit" name="addbtn" class="btn">Add Product</button>
    </form>
  </div>

</body>
</html>
