<?php
session_start();
include "mainmenu.php";
?>
<?php
if (!isset($_GET['pid'])) {
    header("location:occasion.php");
    exit;
} else {
    $pid = $_GET['pid'];
    include('dbconfig.php');
    $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "SELECT * FROM products WHERE product_id = $pid";
    $result = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row[1]; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #fff0f0, #ffe6f3);
        }

        .product-image {
            padding: 40px;
            border-radius: 20px;
            width: 100%;
            max-height: 400px;
            object-fit: cover;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .product-details {
            padding: 60px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(10px);
        }

        .product-details h3 {
            font-weight: 700;
            margin-bottom: 10px;
        }

        .product-details h4 {
            color: #e91e63;
            margin-bottom: 20px;
        }

        .product-details h2 {
            margin-top: 20px;
            font-size: 22px;
        }

        .product-details p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .btn-warning {
            padding: 10px 25px;
            font-size: 16px;
            border-radius: 25px;
        }

        @media (max-width: 768px) {
            .product-details {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
                <img src="<?php echo $row[4]; ?>" class="product-image" />
            </div>
            <div class="col-sm-5 product-details">
                <h3><?php echo $row[1]; ?></h3>
                <h4>&#8377; <?php echo $row[2]; ?></h4>
                <h2>Description :</h2>
                <p><?php echo $row[3]; ?></p>
                <a href="cart.php?pid=<?php echo $row[0]; ?>" class="btn btn-warning">Add To Cart</a>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
