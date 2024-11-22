<?php
session_start();
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['buy'])) {
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];

    // Get the current date
    $date = date("Y-m-d");

    // Insert the product into the database
    $insert_query = "INSERT INTO product_order (price, date, product_name) VALUES ('$price', '$date', '$product_name')";

    if (mysqli_query($conn, $insert_query)) {
        // Product purchased successfully, now display success message
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Core Beans</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/cb-style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>

<body class="size-1280">
    <!-- HEADER -->
    <header role="banner" class="position-absolute">
      <!-- Top Navigation -->
      <nav class="background-transparent background-primary-dott full-width sticky">
        <div class="top-nav">
          <!-- mobile version logo -->
          <div class="logo hide-l hide-xl hide-xxl">
             <a href="home.html" class="logo">
              <!-- Logo  -->
              <img class="logo-white" src="img/MatchLogo.png" alt="">
            </a>
          </div>
          <p class="nav-text"></p>

          <!-- left menu items -->
          <div class="top-nav left-menu">
            <ul class="right top-ul chevron">
               <li><a href="home.html">Home</a></li>
               <li><a href="Menu.html">Menu</a></li>
              
            </ul>
         </div>

         <!-- logo -->
         <ul class="logo-menu">
           <a href="home.html" class="logo">
             <!-- Logo -->
             <img class="logo" src="img/MatchLogo.png" alt="">
           </a>
         </ul>

         <!-- right menu items -->
         <div class="top-nav right-menu">
            <ul class="top-ul chevron">
             <li><a href="shop.html  ">Shop</a></li>
               <li><a href="about.html">About Us</a></li>
             </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- MAIN -->
    <main role="main">
        <!-- Section 1 (Hero) -->
        <section class="section-top-padding background-white text-center">
            <div class="line">
                <h2 class="text-dark text-size-50 text-m-size-40">Purchase <b>Successful</b></h2>
                <h2 class="text-dark text-size-30 text-m-size-40">Thank you for your purchase!</h2>
                <img src="img/success.png" style="max-width: 300px; margin-top: 20px; display: block; margin-left: auto; margin-right: auto;">
            </div>
        </section>
    </main>

    <!-- Main Footer -->
    <section class="section background-darkgreen">
        <div class="line">
            <div class="margin2x">
                <!--Site map-->
                <div class="s-12 m-6 l-3 xl-2">
                    <h4 class="text-gold margin-m-top-30">Site map</h4>
                    <a class="text-primary-hover" href="home.html">Home</a><br>
                    <a class="text-primary-hover" href="Menu.html">Menu</a><br>
                    <a class="text-primary-hover" href="shop.html">Shop</a><br>
                    <a class="text-primary-hover" href="about.html">About us</a>
                </div>
                <!--Contact Us-->
                <div class="s-12 m-6 l-3 xl-3">
                    <h4 class="text-gold text-bold margin-m-top-30">Contact Us</h4>
                    <pre class="footer-text"><i class="icon-sli-screen-smartphone icon-color"></i> <a class="text-primary-hover" href="Tel: 0555555555">0555555555</a></pre>
                    <pre class="footer-text"><i class="icon-mail icon-color"></i> <a class="text-primary-hover" href="mailto: info@brewmatcha.sa">info@brewmatcha.sa</a></pre>
                </div>
                <!--Get to us-->
                <div class="s-12 m-6 l-3 xl-2">
                    <h4 class="text-gold margin-m-top-30">Get to Us</h4>
                    <p><i class="icon-sli-location-pin icon-color"></i> <a class="text-primary-hover" href="https://maps.app.goo.gl/AFxFVnmgRwUVGCyZA" target="_blank">Location</a></p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>

<?php
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
