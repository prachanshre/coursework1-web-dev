<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prachan Collections | Online Shopping for Men in Nepal</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Delius+Swash+Caps|Andika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!-- Header -->
    <?php include 'includes/header_menu.php'; ?>
    <?php include 'includes/check-if-added.php'; ?>
    
    <!-- Banner Section -->
    <div class="container text-center" style="padding-top:150px">
        <div class="p-5 text-white bg-dark rounded">
            <h1>"Delivering Joy, One Purchase at a Time"</h1>
            <p>Flat 20% OFF on premium brands</p>
            <a href="products.php" class="btn btn-warning btn-lg text-white">Shop Now</a>
        </div>
    </div>
    
    <div class="text-center pt-4 h3">
        * "Elevate Your Style, Embrace Your Confidence" *
    </div>
    
    <!-- Product Highlights -->
    <div class="container pt-3">
        <div class="row text-center">
            <?php
            $products = [
                ["watch", "images/watch.jpg", "Watches"],
                ["shirt", "images/clothing.jpg", "Clothing"],
                ["shoes", "images/shoes.jpg", "Shoes"],
                ["headphones", "images/headphones.jpg", "Headphones"]
            ];
            foreach ($products as $product) {
                echo "<div class='col-6 col-md-3 py-3'>
                        <a href='products.php#$product[0]'>
                            <img src='$product[1]' class='img-fluid rounded' alt='$product[2]'>
                            <div class='h5 pt-3 font-weight-bolder'>$product[2]</div>
                        </a>
                      </div>";
            }
            ?>
        </div>
    </div>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover();
            
            if (window.location.href.indexOf('#login') !== -1) {
                $('#login').modal('show');
            }
        });
    </script>
    
    <?php 
    if (isset($_GET['error'])) {
        echo "<script>$(document).ready(function(){ $('#signup').modal('show'); alert('" . htmlspecialchars($_GET['error'], ENT_QUOTES) . "'); });</script>";
    }
    if (isset($_GET['errorl'])) {
        echo "<script>$(document).ready(function(){ $('#login').modal('show'); alert('" . htmlspecialchars($_GET['errorl'], ENT_QUOTES) . "'); });</script>";
    }
    ?>
</body>
</html>
